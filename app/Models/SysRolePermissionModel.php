<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysRolePermissionModel extends BaseModel
{
    protected $table = 'sys_role_permission';
    protected $returnType = 'App\Entities\SysRolePermission';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'role_id',
		'permission_id'
    ];
    protected $validationRules = [
        'role_id' => 'numeric|max_length[11]',
		'permission_id' => 'numeric|max_length[11]'
    ];   
}
