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
	protected $type       = [
        'birthday' => 'datetime',
    ];



}	