<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysOauthClientModel extends BaseModel
{
    protected $table = 'sys_oauth_client';
    protected $returnType = 'App\Entities\SysOauthClient';
    protected $primaryKey = 'client_id';    
    protected $allowedFields = [
        'resource_ids',
		'client_secret',
		'scope',
		'authorized_grant_types',
		'web_server_redirect_uri',
		'authorities',
		'access_token_validity',
		'refresh_token_validity',
		'additional_information',
		'autoapprove'
    ];
    protected $validationRules = [
        'client_id' => 'max_length[256]|required|is_unique[sys_oauth_client.client_id,id,{id}]',
		'resource_ids' => 'max_length[256]',
		'client_secret' => 'max_length[256]',
		'scope' => 'max_length[256]',
		'authorized_grant_types' => 'max_length[256]',
		'web_server_redirect_uri' => 'max_length[256]',
		'authorities' => 'max_length[256]',
		'access_token_validity' => 'numeric|max_length[11]',
		'refresh_token_validity' => 'numeric|max_length[11]',
		'additional_information' => 'max_length[4096]',
		'autoapprove' => 'max_length[256]'
    ];   
}
