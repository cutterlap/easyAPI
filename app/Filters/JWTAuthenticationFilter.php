<?php

namespace App\Filters;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use Nette\Utils\Arrays;
use Nette\Utils\Strings;
use Exception;

class JWTAuthenticationFilter implements FilterInterface
{
    use ResponseTrait;
    private $http_method;
    private $uri_string;

    public function before(RequestInterface $request, $arguments = null)
    {
        $authenticationHeader = $request->getServer('HTTP_AUTHORIZATION');
        $this->http_method = $request->getServer('REQUEST_METHOD');
        $this->uri_string = uri_string();
        //白名單中的路由不做JWT認證
        $in_whiteList = $this->uri_string == '' ? true : Arrays::some(Services::jwt_white_list, function ($value): bool {
            // 白名单里的某一项 eg. '/sys/user/testapi' 包含于 uri_string() => 'api/v2/sys/user/testapi' 中则立即返回true, 所有项都不包含于才返回false
            $res = explode("/", $value);
            $http_method_wl = array_pop($res); // 获取最后一个元素，并且原数组删除最后一个
            $uri_wl = implode("/", $res);   

            // var_dump($http_method_wl);
            var_dump($uri_wl);
            var_dump($this->uri_string);
            // var_dump(Strings::contains(uri_string(), $uri_wl));
            // var_dump($this->http_method === $http_method_wl);
            // var_dump(Strings::contains(uri_string(), $uri_wl) && $this->http_method === $http_method_wl);


            return Strings::contains($this->uri_string, $uri_wl) && $this->http_method === $http_method_wl;
        });

        /*
        try {

            helper('jwt');
            $encodedToken = getJWTFromRequest($authenticationHeader);
            validateJWTFromRequest($encodedToken);
            return $request;

        } catch (Exception $e) {

            return Services::response()
                ->setJSON(
                    [
                        'error' => $e->getMessage()
                    ]
                )
                ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);

        }
        */
    }

    public function after(RequestInterface $request,
                          ResponseInterface $response,
                          $arguments = null)
    {
    }

     //token及权限认证
     public function auth()
     {
        
 
         if (!$in_whiteList) { // 不在白名单里需要校验 token expired etc..
             $headers = $this->_ci->input->request_headers();
 
             // 防止在浏览器直接进入api，页面抛出异常错误
             if (!array_key_exists('Authorization', $headers)) {
                 $message = [
                     "code" => 50015,
                     "message" => 'request_headers has not token info.'
                 ];
                 $this->_ci->response($message, RestController::HTTP_FORBIDDEN);
             }
 
             // Extract the jwt from the Bearer
             list($Token) = sscanf($headers['Authorization'], 'Bearer %s');
 
             try {
                 $decoded = JWT::decode($Token, config_item('jwt_key'), ['HS256']); //HS256方式，这里要和签发的时候对应
                 $userId = $decoded->user_id;
 
                 $retPerm = $this->_ci->permission->HasPermit($userId, uri_string(), $this->http_method);
                 if ($retPerm['code'] != 50000) {
                     $this->_ci->response($retPerm, RestController::HTTP_OK);
                 }
             } catch (\Firebase\JWT\ExpiredException $e) {  // access_token过期
                 $message = [
                     "code" => 50014,
                     "message" => $e->getMessage()
                 ];
                 $this->_ci->response($message, RestController::HTTP_UNAUTHORIZED);
             } catch (Exception $e) {  //其他错误
                 $message = [
                     "code" => 50015,
                     "message" => $e->getMessage()
                 ];
                 $this->_ci->response($message, RestController::HTTP_UNAUTHORIZED);
             }
         }
     } // auth() end
}