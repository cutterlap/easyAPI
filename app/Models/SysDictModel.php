<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysDictModel extends BaseModel
{
    protected $table = 'sys_dict';
    protected $returnType = 'App\Entities\SysDict';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'name',
		'code',
		'status',
		'remark',
		'gmt_create',
		'gmt_modified'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[sys_dict.id,id,{id}]',
		'name' => 'max_length[50]',
		'code' => 'max_length[50]',
		'status' => 'numeric|max_length[1]',
		'remark' => 'max_length[255]',
		'gmt_create' => 'valid_date',
		'gmt_modified' => 'valid_date'
    ];   
}
