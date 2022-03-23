<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SysDept
* @OA\Schema(
*     title="SysDept",
*     description="SysDept"
* )
*
* @OA\Tag(
*     name="SysDept",
*     description="Everything about your SysDept" 
* )
*/ 
class SysDept extends BaseEntity
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
	 *     description="tree_path",
	 *     title="tree_path",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $tree_path;
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
 *     request="SysDept",
 *     description="SysDept object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SysDept"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SysDept")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SysDept")
 *     )
 * )
 */