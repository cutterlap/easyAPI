<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysMenuModel extends BaseModel
{
    protected $table = 'sys_menu';
    protected $returnType = 'App\Entities\SysMenu';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'name',
		'parent_id',
		'path',
		'component',
		'icon',
		'sort',
		'visible',
		'redirect',
		'gmt_create',
		'gmt_modified'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[sys_menu.id,id,{id}]',
		'name' => 'max_length[64]',
		'parent_id' => 'numeric|max_length[20]',
		'path' => 'max_length[128]',
		'component' => 'max_length[128]',
		'icon' => 'max_length[64]',
		'sort' => 'numeric|max_length[11]',
		'visible' => 'numeric|max_length[1]',
		'redirect' => 'max_length[128]',
		'gmt_create' => 'valid_date',
		'gmt_modified' => 'valid_date'
    ];   
}
