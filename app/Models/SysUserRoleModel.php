<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysUserRoleModel extends BaseModel
{
    protected $table = 'sys_user_role';
    protected $returnType = 'App\Entities\SysUserRole';
    protected $primaryKey = 'role_id';    
    protected $allowedFields = [
        ''
    ];
    protected $validationRules = [
        'user_id' => 'numeric|max_length[11]|required|is_unique[sys_user_role.user_id,id,{id}]',
		'role_id' => 'numeric|max_length[11]|required|is_unique[sys_user_role.role_id,id,{id}]'
    ];   
}
