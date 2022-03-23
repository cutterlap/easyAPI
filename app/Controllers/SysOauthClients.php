<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SysOauthClients extends BaseResourceController
{
    protected $modelName = 'App\Models\SysOauthClientModel';  

     /**
     * @OA\Get(
     *     path="/sysOauthClients",
     *     tags={"SysOauthClient"},
     *     summary="Find list SysOauthClient",
     *     description="Returns list of SysOauthClient",
     *     operationId="getSysOauthClient",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysOauthClient")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SysOauthClient")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SysOauthClient")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SysOauthClient not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/sysOauthClients/{id}",
     *     tags={"SysOauthClient"},
     *     summary="Find SysOauthClient by ID",
     *     description="Returns a single SysOauthClient",
     *     operationId="getSysOauthClientById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SysOauthClient to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SysOauthClient"),
     *         @OA\XmlContent(ref="#/components/schemas/SysOauthClient"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SysOauthClient not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/sysOauthClients",
     *     tags={"SysOauthClient"},
     *     summary="Add a new SysOauthClient to the store",
     *     operationId="addSysOauthClient",
     *     @OA\Response(
     *         response=201,
     *         description="Created SysOauthClient",
     *         @OA\JsonContent(ref="#/components/schemas/SysOauthClient"),
     *         @OA\XmlContent(ref="#/components/schemas/SysOauthClient"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysOauthClient"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sysOauthClients/{id}",
     *     tags={"SysOauthClient"},
     *     summary="Update an existing SysOauthClient",
     *     operationId="updateSysOauthClient",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysOauthClient id to update",
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
     *         description="SysOauthClient not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SysOauthClient"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sysOauthClients/{id}",
     *     tags={"SysOauthClient"},
     *     summary="Deletes a SysOauthClient",
     *     operationId="deleteSysOauthClient",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SysOauthClient id to delete",
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