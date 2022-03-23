<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysPermissionModel extends BaseModel
{
    protected $table = 'sys_permission';
    protected $returnType = 'App\Entities\SysPermission';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'name',
		'menu_id',
		'url_perm',
		'btn_perm',
		'gmt_create',
		'gmt_modified'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[sys_permission.id,id,{id}]',
		'name' => 'max_length[64]',
		'menu_id' => 'numeric|max_length[11]',
		'url_perm' => 'max_length[128]',
		'btn_perm' => 'max_length[64]',
		'gmt_create' => 'valid_date',
		'gmt_modified' => 'valid_date'
    ];   
}
