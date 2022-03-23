<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysDicts extends BaseResourceController
{
    protected $modelName = 'App\Models\SysDictModel';  

     /**
     * @OA\Get(
     *     path="/sysDicts",
     *     tags={"SysDict"},
     *     summary="Find list SysDict",
     *     description="Returns list of SysDict",
     *     operationId="getSysDict",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysDict")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysDict")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysDict")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysDict not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysDicts/{id}",
     *     tags={"SysDict"},
     *     summary="Find SysDict by ID",
     *     description="Returns a single SysDict",
     *     operationId="getSysDictById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysDict to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysDict"),
     *         @OA\XmlContent(ref="#/components/schemas/SysDict"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysDict not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysDicts",
     *     tags={"SysDict"},
     *     summary="Add a new SysDict to the store",
     *     operationId="addSysDict",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysDict",
     *         @OA\JsonContent(ref="#/components/schemas/SysDict"),
     *         @OA\XmlContent(ref="#/components/schemas/SysDict"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysDict"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysDicts/{id}",
     *     tags={"SysDict"},
     *     summary="Update an existing SysDict",
     *     operationId="updateSysDict",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysDict id to update",
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
     *         description="SysDict not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysDict"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysDicts/{id}",
     *     tags={"SysDict"},
     *     summary="Deletes a SysDict",
     *     operationId="deleteSysDict",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysDict id to delete",
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