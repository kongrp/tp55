<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends controller
{
    public function index()
    {	
    	//数据查询，需要返回一条记录
    	$data = Db::name('data')
    	->where('id',1)
   		->find();
   		//以下代码如下
   		// $data = Db::name('data')
    	// 	->where('id', '=', 1)
   		//  ->find();

   		//数据查询，需要返回多条记录
    	$data = Db::name('data')
    	->where('id','>=',1)
    	->limit(10)
   		->select(); //返回多条记录用select()

   		//使用exp
   		$data = Db::name('data')
   			->where('id','exp','>=1')
   			->limit(10)
   			->select();

   		//根据id范围进行数据查询 --in
   		$data = Db::name('data')
   			->where('id','in',[1,2,3])
   			->select();

   		//根据id范围进行数据查询 --between
   		$data = Db::name('data')
   			->where('id','between',[5,8])
   			->select();

   		//使用多字段进行数据查询
   		$data = Db::name('data')
   			->where('id','between',[1,3])
   			->where('name','like','%think%')
   			->select();

   		//查询某个字段是否为null
   		$data = Db::name('data')
   			->where('name','null')
   			->select();

   		//使用一个方法完成多个查询条件,同上上个查询语句
   		$data = Db::name('data')
   			->where([
   				'id' => ['between','1,3'],
   				'name' => ['like','%think%'],
   				])
   			->select();

   		//OR、AND混合查询
   		$data = Db::name('data')
   			->where('name','like','%think%')
   			->where('id',['in',[1,2,3]],['between','5,8'],'or')
   			->limit(10)
   			->select();


   		//获取最后一条SQL语句
   		echo Db::getLastSql();

   		//查看返回数据
   		dump($data);

   		$data = Db::name('data')
    		->where('id', '=', 1)
   		    ->find();

sdfsdf

   	




    	// //读取数据
     //    $data = Db::name('data')->find();
     //    // dump($data);

     //    $this->assign('result',$data);
     //    return $this->fetch();
    }		

    public function hello($name='thinkphp')
    {
    	//测试视图文件
    	$this->assign('name',$name);
    	// dump($name);
    	return $this->fetch();
    }













    // public function test()
    // {
    // 	return '这是一个测试方法。';
    // }

    // protected function hello2()
    // {
    // 	return '这是protected方法。';
    // }

    // private function hello3()
    // {
    // 	return '这是一个private方法。';
    // }
}
