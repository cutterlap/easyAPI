<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysDeptModel extends BaseModel
{
    protected $table = 'sys_dept';
    protected $returnType = 'App\Entities\SysDept';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'name',
		'parent_id',
		'tree_path',
		'sort',
		'status',
		'deleted',
		'gmt_create',
		'gmt_modified'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[sys_dept.id,id,{id}]',
		'name' => 'max_length[64]',
		'parent_id' => 'numeric|max_length[20]',
		'tree_path' => 'max_length[255]',
		'sort' => 'numeric|max_length[11]',
		'status' => 'numeric|max_length[1]',
		'deleted' => 'numeric|max_length[1]',
		'gmt_create' => 'valid_date',
		'gmt_modified' => 'valid_date'
    ];   
}
