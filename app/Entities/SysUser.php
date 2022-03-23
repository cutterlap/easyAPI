<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SysUser
* @OA\Schema(
*     title="SysUser",
*     description="SysUser"
* )
*
* @OA\Tag(
*     name="SysUser",
*     description="Everything about your SysUser" 
* )
*/ 
class SysUser extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="id",
	 *     title="id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="username",
	 *     title="username",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=64,
	 * )
	 *		 
	 */
	private $username;
	/**
	 * @OA\Property(		 		 		 
	 *     description="nickname",
	 *     title="nickname",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=64,
	 * )
	 *		 
	 */
	private $nickname;
	/**
	 * @OA\Property(		 		 		 
	 *     description="gender",
	 *     title="gender",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=1,
	 * )
	 *		 
	 */
	private $gender;
	/**
	 * @OA\Property(		 		 		 
	 *     description="password",
	 *     title="password",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $password;
	/**
	 * @OA\Property(		 		 		 
	 *     description="dept_id",
	 *     title="dept_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $dept_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="avatar",
	 *     title="avatar",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $avatar;
	/**
	 * @OA\Property(		 		 		 
	 *     description="mobile",
	 *     title="mobile",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $mobile;
	/**
	 * @OA\Property(		 		 		 
	 *     description="status",
	 *     title="status",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=1,
	 * )
	 *		 
	 */
	private $status;
	/**
	 * @OA\Property(		 		 		 
	 *     description="email",
	 *     title="email",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $email;
	/**
	 * @OA\Property(		 		 		 
	 *     description="deleted",
	 *     title="deleted",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=1,
	 * )
	 *		 
	 */
	private $deleted;
	/**
	 * @OA\Property(		 		 		 
	 *     description="gmt_create",
	 *     title="gmt_create",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $gmt_create;
	/**
	 * @OA\Property(		 		 		 
	 *     description="gmt_modified",
	 *     title="gmt_modified",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $gmt_modified; 
}
/**
 *
 * @OA\RequestBody(
 *     request="SysUser",
 *     description="SysUser object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SysUser"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SysUser")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SysUser")
 *     )
 * )
 */