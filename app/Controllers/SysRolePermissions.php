<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysRolePermissions extends BaseResourceController
{
    protected $modelName = 'App\Models\SysRolePermissionModel';  

     /**
     * @OA\Get(
     *     path="/sysRolePermissions",
     *     tags={"SysRolePermission"},
     *     summary="Find list SysRolePermission",
     *     description="Returns list of SysRolePermission",
     *     operationId="getSysRolePermission",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysRolePermission")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysRolePermission")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysRolePermission")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysRolePermission not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysRolePermissions/{id}",
     *     tags={"SysRolePermission"},
     *     summary="Find SysRolePermission by ID",
     *     description="Returns a single SysRolePermission",
     *     operationId="getSysRolePermissionById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysRolePermission to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysRolePermission"),
     *         @OA\XmlContent(ref="#/components/schemas/SysRolePermission"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysRolePermission not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysRolePermissions",
     *     tags={"SysRolePermission"},
     *     summary="Add a new SysRolePermission to the store",
     *     operationId="addSysRolePermission",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysRolePermission",
     *         @OA\JsonContent(ref="#/components/schemas/SysRolePermission"),
     *         @OA\XmlContent(ref="#/components/schemas/SysRolePermission"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysRolePermission"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysRolePermissions/{id}",
     *     tags={"SysRolePermission"},
     *     summary="Update an existing SysRolePermission",
     *     operationId="updateSysRolePermission",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysRolePermission id to update",
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
     *         description="SysRolePermission not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysRolePermission"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysRolePermissions/{id}",
     *     tags={"SysRolePermission"},
     *     summary="Deletes a SysRolePermission",
     *     operationId="deleteSysRolePermission",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysRolePermission id to delete",
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