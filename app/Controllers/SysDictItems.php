<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysDictItems extends BaseResourceController
{
    protected $modelName = 'App\Models\SysDictItemModel';  

     /**
     * @OA\Get(
     *     path="/sysDictItems",
     *     tags={"SysDictItem"},
     *     summary="Find list SysDictItem",
     *     description="Returns list of SysDictItem",
     *     operationId="getSysDictItem",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysDictItem")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysDictItem")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysDictItem")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysDictItem not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysDictItems/{id}",
     *     tags={"SysDictItem"},
     *     summary="Find SysDictItem by ID",
     *     description="Returns a single SysDictItem",
     *     operationId="getSysDictItemById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysDictItem to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysDictItem"),
     *         @OA\XmlContent(ref="#/components/schemas/SysDictItem"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysDictItem not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysDictItems",
     *     tags={"SysDictItem"},
     *     summary="Add a new SysDictItem to the store",
     *     operationId="addSysDictItem",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysDictItem",
     *         @OA\JsonContent(ref="#/components/schemas/SysDictItem"),
     *         @OA\XmlContent(ref="#/components/schemas/SysDictItem"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysDictItem"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysDictItems/{id}",
     *     tags={"SysDictItem"},
     *     summary="Update an existing SysDictItem",
     *     operationId="updateSysDictItem",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysDictItem id to update",
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
     *         description="SysDictItem not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysDictItem"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysDictItems/{id}",
     *     tags={"SysDictItem"},
     *     summary="Deletes a SysDictItem",
     *     operationId="deleteSysDictItem",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysDictItem id to delete",
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