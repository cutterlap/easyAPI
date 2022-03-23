<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SysOauthClient
* @OA\Schema(
*     title="SysOauthClient",
*     description="SysOauthClient"
* )
*
* @OA\Tag(
*     name="SysOauthClient",
*     description="Everything about your SysOauthClient" 
* )
*/ 
class SysOauthClient extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="client_id",
	 *     title="client_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=256,
	 * )
	 *		 
	 */
	private $client_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="resource_ids",
	 *     title="resource_ids",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=256,
	 * )
	 *		 
	 */
	private $resource_ids;
	/**
	 * @OA\Property(		 		 		 
	 *     description="client_secret",
	 *     title="client_secret",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=256,
	 * )
	 *		 
	 */
	private $client_secret;
	/**
	 * @OA\Property(		 		 		 
	 *     description="scope",
	 *     title="scope",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=256,
	 * )
	 *		 
	 */
	private $scope;
	/**
	 * @OA\Property(		 		 		 
	 *     description="authorized_grant_types",
	 *     title="authorized_grant_types",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=256,
	 * )
	 *		 
	 */
	private $authorized_grant_types;
	/**
	 * @OA\Property(		 		 		 
	 *     description="web_server_redirect_uri",
	 *     title="web_server_redirect_uri",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=256,
	 * )
	 *		 
	 */
	private $web_server_redirect_uri;
	/**
	 * @OA\Property(		 		 		 
	 *     description="authorities",
	 *     title="authorities",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=256,
	 * )
	 *		 
	 */
	private $authorities;
	/**
	 * @OA\Property(		 		 		 
	 *     description="access_token_validity",
	 *     title="access_token_validity",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $access_token_validity;
	/**
	 * @OA\Property(		 		 		 
	 *     description="refresh_token_validity",
	 *     title="refresh_token_validity",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $refresh_token_validity;
	/**
	 * @OA\Property(		 		 		 
	 *     description="additional_information",
	 *     title="additional_information",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=4096,
	 * )
	 *		 
	 */
	private $additional_information;
	/**
	 * @OA\Property(		 		 		 
	 *     description="autoapprove",
	 *     title="autoapprove",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=256,
	 * )
	 *		 
	 */
	private $autoapprove; 
}
/**
 *
 * @OA\RequestBody(
 *     request="SysOauthClient",
 *     description="SysOauthClient object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SysOauthClient"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SysOauthClient")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SysOauthClient")
 *     )
 * )
 */