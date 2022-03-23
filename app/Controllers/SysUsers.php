<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysUsers extends BaseResourceController
{
    protected $modelName = 'App\Models\SysUserModel';  

     /**
     * @OA\Get(
     *     path="/sysUsers",
     *     tags={"SysUser"},
     *     summary="Find list SysUser",
     *     description="Returns list of SysUser",
     *     operationId="getSysUser",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysUser")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysUser")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysUser")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysUser not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysUsers/{id}",
     *     tags={"SysUser"},
     *     summary="Find SysUser by ID",
     *     description="Returns a single SysUser",
     *     operationId="getSysUserById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysUser to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysUser"),
     *         @OA\XmlContent(ref="#/components/schemas/SysUser"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysUser not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysUsers",
     *     tags={"SysUser"},
     *     summary="Add a new SysUser to the store",
     *     operationId="addSysUser",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysUser",
     *         @OA\JsonContent(ref="#/components/schemas/SysUser"),
     *         @OA\XmlContent(ref="#/components/schemas/SysUser"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysUser"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysUsers/{id}",
     *     tags={"SysUser"},
     *     summary="Update an existing SysUser",
     *     operationId="updateSysUser",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysUser id to update",
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
     *         description="SysUser not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysUser"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysUsers/{id}",
     *     tags={"SysUser"},
     *     summary="Deletes a SysUser",
     *     operationId="deleteSysUser",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysUser id to delete",
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