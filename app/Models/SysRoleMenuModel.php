<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysRoleMenuModel extends BaseModel
{
    protected $table = 'sys_role_menu';
    protected $returnType = 'App\Entities\SysRoleMenu';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'role_id',
		'menu_id'
    ];
    protected $validationRules = [
        'role_id' => 'numeric|max_length[20]|required',
		'menu_id' => 'numeric|max_length[20]|required'
    ];   
}
