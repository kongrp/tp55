<?php
namespace app\index\Controller;
use app\index\model\User as UserModel;

class User
{
	//新增用户数据
	public function add()
	{
		$user = New UserModel();
		$user->nickname = '流年';
		$user->email = 'thinkphp@qq.com';
		$user->birthday = strtotime('1977-03-05');
		if($user->save())
		{
			return '用户['.$user->nickname.':'.$user->id.']新增成功';
		}
		else
		{
			return $user->getError();
		}





		
	}
}