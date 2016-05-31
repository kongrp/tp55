<?php
namespace app\index\Controller;
use app\index\model\User as UserModel;

class User
{
	//自增单个用户数据
	public function add()
	{
		$user = New UserModel();
		$user->nickname = '流年';
		$user->email = 'thinkphp@qq.com';
		$user->birthday = strtotime('1977-03-05');
		// //下三行与上三行作用一样
		// $user['nickname'] = '看云';
		// $user['email'] = 'kancloud@qq.com';
		// $user['birthday'] = strtotime('1977-03-05');

		if($user->save())
		{
			return '用户['.$user->nickname.':'.$user->id.']新增成功';
		}
		else
		{
			return $user->getError();
		}
	}

	//批量新增用户
	public function addList()
	{
		$user = New UserModel();

		$list = [
			['nickname'=>'张三','email'=>'zhangsan@qq.com','birthday'=>strtotime('1988-01-15')],
			['nickname'=>'李四','email'=>'lisi@qq.com','birthday'=>strtotime('1990-09-19')],
		];

		if($user->saveAll($list))
		{
			return '用户批量新增成功';
		}
		else
		{
			return $user->getError();
		}
	} 


	//查询用户数据
	//现改为通过用户的email来查询模型数据
	
	public function read()
{
$user = UserModel::getByEmail('thinkphp@qq.com');
echo $user->nickname . '<br/>';
echo $user->email . '<br/>';
echo date('Y/m/d', $user->birthday) . '<br/>';
}

	public function read()
	{
		$user = UserModel::getByEmail('thinkphp@qq.com');
		
		echo $user->nickname.'<br/>';
		echo $user->email.'<br/>';
		echo date('Y/m/d',$user->birthday).'<br/>';
		// echo $user['nickname'].'<br/>';
		// echo $user['email'].'<br/>';
		// echo date('Y/m/d',$user['birthday']).'<br/>';

	}
	
}