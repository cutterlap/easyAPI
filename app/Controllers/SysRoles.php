<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysRoles extends BaseResourceController
{
    protected $modelName = 'App\Models\SysRoleModel';  

     /**
     * @OA\Get(
     *     path="/sysRoles",
     *     tags={"SysRole"},
     *     summary="Find list SysRole",
     *     description="Returns list of SysRole",
     *     operationId="getSysRole",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysRole")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysRole")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysRole")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysRole not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysRoles/{id}",
     *     tags={"SysRole"},
     *     summary="Find SysRole by ID",
     *     description="Returns a single SysRole",
     *     operationId="getSysRoleById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysRole to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysRole"),
     *         @OA\XmlContent(ref="#/components/schemas/SysRole"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysRole not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysRoles",
     *     tags={"SysRole"},
     *     summary="Add a new SysRole to the store",
     *     operationId="addSysRole",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysRole",
     *         @OA\JsonContent(ref="#/components/schemas/SysRole"),
     *         @OA\XmlContent(ref="#/components/schemas/SysRole"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysRole"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysRoles/{id}",
     *     tags={"SysRole"},
     *     summary="Update an existing SysRole",
     *     operationId="updateSysRole",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysRole id to update",
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
     *         description="SysRole not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysRole"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysRoles/{id}",
     *     tags={"SysRole"},
     *     summary="Deletes a SysRole",
     *     operationId="deleteSysRole",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysRole id to delete",
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