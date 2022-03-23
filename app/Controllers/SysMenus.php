<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysMenus extends BaseResourceController
{
    protected $modelName = 'App\Models\SysMenuModel';  

     /**
     * @OA\Get(
     *     path="/sysMenus",
     *     tags={"SysMenu"},
     *     summary="Find list SysMenu",
     *     description="Returns list of SysMenu",
     *     operationId="getSysMenu",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysMenu")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysMenu")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysMenu")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysMenu not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysMenus/{id}",
     *     tags={"SysMenu"},
     *     summary="Find SysMenu by ID",
     *     description="Returns a single SysMenu",
     *     operationId="getSysMenuById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysMenu to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysMenu"),
     *         @OA\XmlContent(ref="#/components/schemas/SysMenu"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysMenu not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysMenus",
     *     tags={"SysMenu"},
     *     summary="Add a new SysMenu to the store",
     *     operationId="addSysMenu",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysMenu",
     *         @OA\JsonContent(ref="#/components/schemas/SysMenu"),
     *         @OA\XmlContent(ref="#/components/schemas/SysMenu"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysMenu"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysMenus/{id}",
     *     tags={"SysMenu"},
     *     summary="Update an existing SysMenu",
     *     operationId="updateSysMenu",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysMenu id to update",
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
     *         description="SysMenu not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysMenu"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysMenus/{id}",
     *     tags={"SysMenu"},
     *     summary="Deletes a SysMenu",
     *     operationId="deleteSysMenu",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysMenu id to delete",
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