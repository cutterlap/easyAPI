<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SysMenu
* @OA\Schema(
*     title="SysMenu",
*     description="SysMenu"
* )
*
* @OA\Tag(
*     name="SysMenu",
*     description="Everything about your SysMenu" 
* )
*/ 
class SysMenu extends BaseEntity
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
	 *     description="parent_id",
	 *     title="parent_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $parent_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="path",
	 *     title="path",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $path;
	/**
	 * @OA\Property(		 		 		 
	 *     description="component",
	 *     title="component",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $component;
	/**
	 * @OA\Property(		 		 		 
	 *     description="icon",
	 *     title="icon",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=64,
	 * )
	 *		 
	 */
	private $icon;
	/**
	 * @OA\Property(		 		 		 
	 *     description="sort",
	 *     title="sort",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $sort;
	/**
	 * @OA\Property(		 		 		 
	 *     description="visible",
	 *     title="visible",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=1,
	 * )
	 *		 
	 */
	private $visible;
	/**
	 * @OA\Property(		 		 		 
	 *     description="redirect",
	 *     title="redirect",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $redirect;
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
 *     request="SysMenu",
 *     description="SysMenu object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SysMenu"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SysMenu")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SysMenu")
 *     )
 * )
 */