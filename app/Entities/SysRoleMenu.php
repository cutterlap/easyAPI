<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SysRoleMenu
* @OA\Schema(
*     title="SysRoleMenu",
*     description="SysRoleMenu"
* )
*
* @OA\Tag(
*     name="SysRoleMenu",
*     description="Everything about your SysRoleMenu" 
* )
*/ 
class SysRoleMenu extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="role_id",
	 *     title="role_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $role_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="menu_id",
	 *     title="menu_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $menu_id; 
}
/**
 *
 * @OA\RequestBody(
 *     request="SysRoleMenu",
 *     description="SysRoleMenu object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SysRoleMenu"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SysRoleMenu")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SysRoleMenu")
 *     )
 * )
 */