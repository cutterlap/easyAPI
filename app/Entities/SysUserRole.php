<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SysUserRole
* @OA\Schema(
*     title="SysUserRole",
*     description="SysUserRole"
* )
*
* @OA\Tag(
*     name="SysUserRole",
*     description="Everything about your SysUserRole" 
* )
*/ 
class SysUserRole extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="user_id",
	 *     title="user_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $user_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="role_id",
	 *     title="role_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $role_id; 
}
/**
 *
 * @OA\RequestBody(
 *     request="SysUserRole",
 *     description="SysUserRole object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SysUserRole"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SysUserRole")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SysUserRole")
 *     )
 * )
 */