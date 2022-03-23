<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysRoleMenus extends BaseResourceController
{
    protected $modelName = 'App\Models\SysRoleMenuModel';  

     /**
     * @OA\Get(
     *     path="/sysRoleMenus",
     *     tags={"SysRoleMenu"},
     *     summary="Find list SysRoleMenu",
     *     description="Returns list of SysRoleMenu",
     *     operationId="getSysRoleMenu",  
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="search by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="order",
     *         in="query",
     *         description="order by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),    
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="page to show",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="count data display per page",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),   
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",     
     *         @OA\JsonContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysRoleMenu")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysRoleMenu")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysRoleMenu")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysRoleMenu not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysRoleMenus/{id}",
     *     tags={"SysRoleMenu"},
     *     summary="Find SysRoleMenu by ID",
     *     description="Returns a single SysRoleMenu",
     *     operationId="getSysRoleMenuById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysRoleMenu to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysRoleMenu"),
     *         @OA\XmlContent(ref="#/components/schemas/SysRoleMenu"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysRoleMenu not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysRoleMenus",
     *     tags={"SysRoleMenu"},
     *     summary="Add a new SysRoleMenu to the store",
     *     operationId="addSysRoleMenu",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysRoleMenu",
     *         @OA\JsonContent(ref="#/components/schemas/SysRoleMenu"),
     *         @OA\XmlContent(ref="#/components/schemas/SysRoleMenu"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysRoleMenu"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysRoleMenus/{id}",
     *     tags={"SysRoleMenu"},
     *     summary="Update an existing SysRoleMenu",
     *     operationId="updateSysRoleMenu",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysRoleMenu id to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysRoleMenu not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysRoleMenu"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysRoleMenus/{id}",
     *     tags={"SysRoleMenu"},
     *     summary="Deletes a SysRoleMenu",
     *     operationId="deleteSysRoleMenu",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysRoleMenu id to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pet not found",
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     * )
     */
} 