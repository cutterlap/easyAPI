<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysUserRoles extends BaseResourceController
{
    protected $modelName = 'App\Models\SysUserRoleModel';  

     /**
     * @OA\Get(
     *     path="/sysUserRoles",
     *     tags={"SysUserRole"},
     *     summary="Find list SysUserRole",
     *     description="Returns list of SysUserRole",
     *     operationId="getSysUserRole",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysUserRole")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysUserRole")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysUserRole")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysUserRole not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysUserRoles/{id}",
     *     tags={"SysUserRole"},
     *     summary="Find SysUserRole by ID",
     *     description="Returns a single SysUserRole",
     *     operationId="getSysUserRoleById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysUserRole to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysUserRole"),
     *         @OA\XmlContent(ref="#/components/schemas/SysUserRole"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysUserRole not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysUserRoles",
     *     tags={"SysUserRole"},
     *     summary="Add a new SysUserRole to the store",
     *     operationId="addSysUserRole",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysUserRole",
     *         @OA\JsonContent(ref="#/components/schemas/SysUserRole"),
     *         @OA\XmlContent(ref="#/components/schemas/SysUserRole"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysUserRole"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysUserRoles/{id}",
     *     tags={"SysUserRole"},
     *     summary="Update an existing SysUserRole",
     *     operationId="updateSysUserRole",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysUserRole id to update",
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
     *         description="SysUserRole not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysUserRole"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysUserRoles/{id}",
     *     tags={"SysUserRole"},
     *     summary="Deletes a SysUserRole",
     *     operationId="deleteSysUserRole",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysUserRole id to delete",
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