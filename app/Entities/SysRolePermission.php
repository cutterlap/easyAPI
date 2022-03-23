<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SysRolePermission
* @OA\Schema(
*     title="SysRolePermission",
*     description="SysRolePermission"
* )
*
* @OA\Tag(
*     name="SysRolePermission",
*     description="Everything about your SysRolePermission" 
* )
*/ 
class SysRolePermission extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="role_id",
	 *     title="role_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $role_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="permission_id",
	 *     title="permission_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $permission_id; 
}
/**
 *
 * @OA\RequestBody(
 *     request="SysRolePermission",
 *     description="SysRolePermission object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SysRolePermission"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SysRolePermission")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SysRolePermission")
 *     )
 * )
 */