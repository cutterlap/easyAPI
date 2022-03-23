<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SysPermission
* @OA\Schema(
*     title="SysPermission",
*     description="SysPermission"
* )
*
* @OA\Tag(
*     name="SysPermission",
*     description="Everything about your SysPermission" 
* )
*/ 
class SysPermission extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="id",
	 *     title="id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="name",
	 *     title="name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=64,
	 * )
	 *		 
	 */
	private $name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="menu_id",
	 *     title="menu_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $menu_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="url_perm",
	 *     title="url_perm",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $url_perm;
	/**
	 * @OA\Property(		 		 		 
	 *     description="btn_perm",
	 *     title="btn_perm",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=64,
	 * )
	 *		 
	 */
	private $btn_perm;
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
 *     request="SysPermission",
 *     description="SysPermission object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SysPermission"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SysPermission")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SysPermission")
 *     )
 * )
 */