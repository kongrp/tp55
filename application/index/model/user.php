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

	//同上面的另一个写法,user_birthday读取器
	protected function getUserBirthdayAttr($value,$data)
	{
		return date('Y-m-d',$data['birthday']);
	}

}	