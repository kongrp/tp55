<?php
namespace app\index\controller;
use app\index\model\User;

class Index
{
    public function index()
    {	
      $test = New User(); //实例化对象
      dump($test);        //输出对象信息
    }
}
