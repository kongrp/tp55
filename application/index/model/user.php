<?php
namespace app\index\model;
use think\Model;

class User extends Model
{
	// //定义birthdy读取器
	// protected function getBirthdayAttr($birthday)
	// {
	// 	return date('Y-m-d',$birthday);
	// }

	// //同上面的另一个写法,user_birthday读取器
	// protected function getUserBirthdayAttr($value,$data)
	// {
	// 	return date('Y-m-d',$data['birthday']);
	// }

	// //定义修改器
	// protected function setBirthdayAttr($value)
	// {
	// 	return strtotime($value);
	// }

	//以下等同于以上方法
	protected $dateFormat = 'Y/m/d';

	// 关闭自动写入时间戳,创建时间等就不再显示
	//protected $autoWriteTimestamp = false;

	// 定义类型转换
	protected $type = [
	        'birthday'    => 'datetime:Y/m/d',
	        'create_time' => 'datetime',
	        'update_time' => 'datetime',
	    ];
	// 定义自动完成的属性
	//protected $insert = ['status' =>1];

	// 定义自动完成的属性
	protected $insert = ['status'];

	// status属性修改器
	protected function setStatusAttr($value, $data)
	{
	return'流年' == $data['nickname'] ? 1 : 2;
	    }

	// status属性读取器
	protected function getStatusAttr($value)
	{
	$status = [-1 =>'删除', 0 =>'禁用', 1 =>'正常', 2 =>'待审核'];
	return $status[$value];
	}




}	