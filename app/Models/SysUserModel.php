<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysUserModel extends BaseModel
{
    protected $table = 'sys_user';
    protected $returnType = 'App\Entities\SysUser';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'username',
		'nickname',
		'gender',
		'password',
		'dept_id',
		'avatar',
		'mobile',
		'status',
		'email',
		'deleted',
		'gmt_create',
		'gmt_modified'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[sys_user.id,id,{id}]',
		'username' => 'max_length[64]',
		'nickname' => 'max_length[64]',
		'gender' => 'numeric|max_length[1]',
		'password' => 'max_length[100]',
		'dept_id' => 'numeric|max_length[11]',
		'avatar' => 'max_length[255]',
		'mobile' => 'max_length[20]',
		'status' => 'numeric|max_length[1]',
		'email' => 'max_length[128]',
		'deleted' => 'numeric|max_length[1]',
		'gmt_create' => 'valid_date',
		'gmt_modified' => 'valid_date'
    ];   
}
