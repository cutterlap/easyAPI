<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\SysUserModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;
use ReflectionException;

class Login extends BaseController
{
    protected $users = 'App\Models\SysUsersModel';

    /**
     * @OA\Post(
     *     path="/auth/login",
     *     tags={"User Login"},
     *     summary="login page to authenticate user",
     *     operationId="userLogin",
     *     @OA\RequestBody(
     *       required=true,
     *       description="Login user",
     *       @OA\MediaType(
     *           mediaType="multipart/form-data",
     *           @OA\Schema(
     * 				type="object",
     * 				@OA\Property(property="username",type="string"),
     * 				@OA\Property(property="password",type="string"),
     * 			)
     *       ),
     * 	   ),
     *     @OA\Response(
     *         response=200,
     *         description="Login successed",
     *         @OA\JsonContent(
     * 			@OA\Schema(
     * 				type="object",
     * 				@OA\Property(property="token",type="string"),
     *              @OA\Property(property="refresh_token",type="string"),
     * 			)
     * 		),
     *         @OA\XmlContent(
     * 			@OA\Schema(
     * 				type="object",
     * 				@OA\Property(property="token",type="string"),
     *              @OA\Property(property="refresh_token",type="string"),
     * 			)
     * 		),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid username/password supplied"
     *     ),
     * )
     */


    /**
     * Authenticate Existing User
     * @return Response
     */
    public function login()
    {
        $rules = [
            'username' => 'required|min_length[5]|max_length[50]',
            'password' => 'required|min_length[6]|max_length[255]|validateUser[username, password]'
        ];

        $errors = [
            'password' => [
                'validateUser' => 'Invalid login credentials provided'
            ]
        ];

        $input = $this->getRequestInput($this->request);


        if (!$this->validateRequest($input, $rules, $errors)) {
            return $this
                ->getResponse(
                    $this->validator->getErrors(),
                    ResponseInterface::HTTP_BAD_REQUEST
                );
        }
        return $this->getJWTForUser($input['username']);
    }

    private function getJWTForUser(string $username, int $responseCode = ResponseInterface::HTTP_OK)
    {
        try {
            $model = new SysUserModel();
            $user = $model->findUserByUserName($username);
            unset($user['password']);

            helper('jwt');

            return $this
                ->getResponse(
                    [
                        'message' => 'User authenticated successfully',
                        'access_token' => getSignedJWTForUser($user['id'], 'role_access'),
                        'refresh_token' => getSignedJWTForUser($user['id'], 'role_refresh')
                    ]
                );
        } catch (Exception $exception) {
            return $this
                ->getResponse(
                    [
                        'error' => $exception->getMessage(),
                    ],
                    $responseCode
                );
        }
    }

    /**
     * Attempts to log the user in.
     */
    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */

    /*
    public function action()
    {
        $username = $this->post('username'); // POST param
        $password = $this->post('password'); // POST param

        $result = $this->User_model->validate($username, md5($password));

        // 用户名密码正确 生成token 返回
        if ($result['success']) {
            $userInfo = $result['userinfo'];
            $this->generate_access_token($userInfo['id']);
        } else {
            $message = [
                "code" => 60204,
                "message" => 'Account and password are incorrect.'
            ];
            $this->response($message, RestController::HTTP_OK);
        }


        $credentials             = $this->request->getPost('username');
        $credentials             = array_filter($credentials);
        $credentials['password'] = $this->request->getPost('password');

        // Attempt to login
        $result = auth('session')->attempt($credentials);
        if (!$result->isOK()) {
            unset($credentials['password']);
            // Events::trigger('failedLogin', $credentials);

            return $this->failUnauthorized('Unauthorized', null, $result->reason());
        }
        $user = $result->extraInfo();

        return $this->respondUpdated([
            'token' => $this->getTokenSecret($user),
        ], lang('Auth.loginSuccess'));
    }
    */
}
