<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysDepts extends BaseResourceController
{
    protected $modelName = 'App\Models\SysDeptModel';  

     /**
     * @OA\Get(
     *     path="/sysDepts",
     *     tags={"SysDept"},
     *     summary="Find list SysDept",
     *     description="Returns list of SysDept",
     *     operationId="getSysDept",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysDept")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysDept")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysDept")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysDept not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysDepts/{id}",
     *     tags={"SysDept"},
     *     summary="Find SysDept by ID",
     *     description="Returns a single SysDept",
     *     operationId="getSysDeptById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysDept to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysDept"),
     *         @OA\XmlContent(ref="#/components/schemas/SysDept"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysDept not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysDepts",
     *     tags={"SysDept"},
     *     summary="Add a new SysDept to the store",
     *     operationId="addSysDept",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysDept",
     *         @OA\JsonContent(ref="#/components/schemas/SysDept"),
     *         @OA\XmlContent(ref="#/components/schemas/SysDept"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysDept"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysDepts/{id}",
     *     tags={"SysDept"},
     *     summary="Update an existing SysDept",
     *     operationId="updateSysDept",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysDept id to update",
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
     *         description="SysDept not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysDept"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysDepts/{id}",
     *     tags={"SysDept"},
     *     summary="Deletes a SysDept",
     *     operationId="deleteSysDept",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysDept id to delete",
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