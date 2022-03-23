<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysPermissions extends BaseResourceController
{
    protected $modelName = 'App\Models\SysPermissionModel';  

     /**
     * @OA\Get(
     *     path="/sysPermissions",
     *     tags={"SysPermission"},
     *     summary="Find list SysPermission",
     *     description="Returns list of SysPermission",
     *     operationId="getSysPermission",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysPermission")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysPermission")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysPermission")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysPermission not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysPermissions/{id}",
     *     tags={"SysPermission"},
     *     summary="Find SysPermission by ID",
     *     description="Returns a single SysPermission",
     *     operationId="getSysPermissionById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysPermission to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysPermission"),
     *         @OA\XmlContent(ref="#/components/schemas/SysPermission"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysPermission not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysPermissions",
     *     tags={"SysPermission"},
     *     summary="Add a new SysPermission to the store",
     *     operationId="addSysPermission",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysPermission",
     *         @OA\JsonContent(ref="#/components/schemas/SysPermission"),
     *         @OA\XmlContent(ref="#/components/schemas/SysPermission"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysPermission"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysPermissions/{id}",
     *     tags={"SysPermission"},
     *     summary="Update an existing SysPermission",
     *     operationId="updateSysPermission",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysPermission id to update",
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
     *         description="SysPermission not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysPermission"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysPermissions/{id}",
     *     tags={"SysPermission"},
     *     summary="Deletes a SysPermission",
     *     operationId="deleteSysPermission",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysPermission id to delete",
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