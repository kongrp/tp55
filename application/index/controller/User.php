<?php
namespace app\index\Controller;
use app\index\model\User as UserModel; //设置别名
use think\Controller;

class User extends Controller
{
	//自增单个用户数据
	public function add()
	{
		$user = New UserModel();
		// $user->nickname = '流年';
		// $user->email = 'thinkphp@qq.com';
		// $user->birthday = '1977-03-05';
		// //下三行与上三行作用一样
		$user['nickname'] = '看云';
		// $user['email'] = 'kancloud@qq.com';
		// $user['birthday'] = strtotime('1977-03-05');

		if($user->save(input('post.')))
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
	

	//按照id查询，read()方法需改为read($id='')
	//$user = UserModel::get($id);
	public function read($id='')
	{
		$user = UserModel::get($id);
		// 读取用户数据并输出数组
		//dump($user->toArray());

		// 读取用户数据输出JSON
		echo $user->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		//等同于dump($user->toJson())
		//等同于只输入：echo UserModel::get($id);

		//若需要隐藏某些属性
		//dump($user->hidden(['create_time','update_time'])->toArray());

		//echo $user->nickname . '<br/>';
		//echo $user->email . '<br/>';
		//echo $user->birthday . '<br/>';
		//echo $user->user_birthday . '<br/>';
		//echo $user->status . '<br/>';
		//echo $user->create_time . '<br/>';
		//echo $user->update_time . '<br/>';

		
	}

	//查询用户数据
	public function read1()
	{
		//通过用户email来查询
		//$user = UserModel::getByEmail('thinkphp@qq.com');
		
		//根据nickname读取用户数据，以传入数组作为查询条件
		//$user = UserModel::get(['nickname'=>'xingyun']); 

		//根据nickname读取用户数据，以查询建构器作为查询条件
	    $user = UserModel::where('nickname','liunian')->find();

		//输出查询到的用户信息
		echo $user->nickname.'<br/>';
		echo $user->email.'<br/>';
		echo date('Y/m/d',$user->birthday).'<br/>';
		// echo $user['nickname'].'<br/>';
		// echo $user['email'].'<br/>';
		// echo date('Y/m/d',$user['birthday']).'<br/>';

	}

	public function index()
	{
		//主键查询
		//$list = UserModel::all();

		//可以直接传入数组条件查询
		//$list = UserModel::all(['status'=>1]);	

		//使用查询构建器
		//$list = UserModel::where('id','<',10)->select();

		// 根据查询范围获取用户数据列表
		//$list = UserModel::scope('email,status')->all();

		// //支持多次调用scope方法
		// $list = UserModel::scope('email')
		// 				->scope('status')
		// 				->scope(function($query){
		// 					$query->order('id','desc');
		// 				})
		// 				->all();

		// //遍历输出用户数据
		// foreach ($list as $user) 
		// {
		// 	echo $user->nickname . '<br/>';
		// 	echo $user->email . '<br/>';
		// 	echo $user->birthday . '<br/>';
		// 	echo $user->status .'</br>';
		// 	echo '---------------<br/>';
		// }

		//输出数据集
		// $list = UserModel::all();
		// $this->assign('list',$list);
		// $this->assign('count',count($list));
		// return $this->fetch();

		//输出用户的分页信息，每页3条
		$list = UserModel::paginate(3);
		$this->assign('list',$list);
		return $this->fetch();
		//dump($list->total());

	}

	//update()方法
	public function update($id)
	{
		// $user = UserModel::get($id);
		// $user->nickname = "liuchen";
		// $user->email = "liuchen@qq.com";
		// if(false !== $user->save())
		// {
		// 	return '用户更新成功';
		// }
		// else{
		// 	return $user->getError();
		// }

		//更为高效的方法
		$user['id'] = (int)$id;
		$user['nickname'] = 'liuchen1';
		$user['email'] = 'liuchen1@qq.com';
		$result = UserModel::update($user);
		if(false !== $result){
			return '用户更新成功';
		}
		else{
			return $user->getError();
		}
	}

	//删除用户信息
	public function delete($id)
	{
		//给User控制器添加delete方法用于删除用户
		// $user = UserModel::get($id);
		// if($user)
		// {
		// 	$user->delete();
		// 	return '删除成功';
		// }
		// else
		// {
		// 	return '删除不成功';
		// }

		//直接使用destroy方法删除模型数据
		$result = UserModel::destroy($id);
		if($result)
		{
			return '删除成功';
		}
		else
		{
			return '删除不成功';
		}
	}

	public function create()
	{
		return view('user/create');
	}

	
}