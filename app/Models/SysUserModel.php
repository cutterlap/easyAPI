<?php

namespace App\Models;

use asligresik\easyapi\Models\BaseModel;
use Exception;

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
	];

	// Dates
	protected $useTimestamps = true;
	protected $dateFormat    = 'datetime';
	protected $createdField  = 'gmt_create';
	protected $updatedField  = 'gmt_modified';
	protected $deletedField  = 'deleted';

	protected $beforeInsert = ['beforeInsert'];
	protected $beforeUpdate = ['beforeUpdate'];

	protected function beforeInsert(array $data): array
	{
		return $this->getUpdatedDataWithHashedPassword($data);
	}

	protected function beforeUpdate(array $data): array
	{
		return $this->getUpdatedDataWithHashedPassword($data);
	}

	private function getUpdatedDataWithHashedPassword(array $data): array
	{
		if (isset($data['data']['password'])) {
			$plaintextPassword = $data['data']['password'];
			$data['data']['password'] = $this->hashPassword($plaintextPassword);
		}
		return $data;
	}

	private function hashPassword(string $plaintextPassword): string
	{
		return password_hash($plaintextPassword, PASSWORD_BCRYPT);
	}

	public function findUserByUserName(string $user_name)
	{
		$user = $this
			->asArray()
			->where(['username' => $user_name])
			->first();

		if (!$user)
			throw new Exception('User does not exist');

		return $user;
	}
}
