<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SysRole
* @OA\Schema(
*     title="SysRole",
*     description="SysRole"
* )
*
* @OA\Tag(
*     name="SysRole",
*     description="Everything about your SysRole" 
* )
*/ 
class SysRole extends BaseEntity
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
	 * 	   nullable=false,
	 * 	   maxLength=64,
	 * )
	 *		 
	 */
	private $name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="code",
	 *     title="code",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=32,
	 * )
	 *		 
	 */
	private $code;
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
	 * 	   nullable=false,
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
 *     request="SysRole",
 *     description="SysRole object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SysRole"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SysRole")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SysRole")
 *     )
 * )
 */