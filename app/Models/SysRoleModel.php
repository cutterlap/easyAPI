<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysRoleModel extends BaseModel
{
    protected $table = 'sys_role';
    protected $returnType = 'App\Entities\SysRole';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'name',
		'code',
		'sort',
		'status',
		'deleted',
		'gmt_create',
		'gmt_modified'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[sys_role.id,id,{id}]',
		'name' => 'max_length[64]|required',
		'code' => 'max_length[32]',
		'sort' => 'numeric|max_length[11]',
		'status' => 'numeric|max_length[1]',
		'deleted' => 'numeric|max_length[1]|required',
		'gmt_create' => 'valid_date',
		'gmt_modified' => 'valid_date'
    ];   
}
