<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SysDictItemModel extends BaseModel
{
    protected $table = 'sys_dict_item';
    protected $returnType = 'App\Entities\SysDictItem';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'name',
		'value',
		'dict_code',
		'sort',
		'status',
		'defaulted',
		'remark',
		'gmt_create',
		'gmt_modified'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[20]|required|is_unique[sys_dict_item.id,id,{id}]',
		'name' => 'max_length[50]',
		'value' => 'max_length[50]',
		'dict_code' => 'max_length[50]',
		'sort' => 'numeric|max_length[11]',
		'status' => 'numeric|max_length[1]',
		'defaulted' => 'numeric|max_length[1]',
		'remark' => 'max_length[255]',
		'gmt_create' => 'valid_date',
		'gmt_modified' => 'valid_date'
    ];   
}
