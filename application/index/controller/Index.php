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
   		//等同如下代码：
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

   		$data = Db::name('data')
   			->where([
   				'name' => ['like','%think%'],
   				'id' => [['in',[1,2,3]],['between','5,8'],'or']
   				])->limit(10)->select();

      //查询id和status值同时大于0的数据
      $data = Db::name('data')
        ->where('id','>',0)
        ->where('status','>',0)
        //->where('id&status','>',0)
        ->limit(10)
        ->select();

      //查询id或者status值大于0的数据
      $data = Db::name('data')
        ->where('id|status','>',0)
        ->limit(11)
        ->select();
        
      // 获取id为8的data数据的name字段值
     $name = Db::name('data')
      ->where('id',8)
      ->value('name');
      dump($name);

      //获取某个列中符合条件的语句
      $list = Db::name('data')
        ->where('status',1)
        ->column('name');

      //返回以id为索引的name列数据 
      $list = Db::name('data')
        ->where('status',1)
        ->column('name','id');


      //统计data表的数据
      $count = Db::name('data')
        ->where('status', 1)
        ->count();

      //以下为user表操作
      //统计user表的数据
      $count = Db::name('user')
        ->where('status', 1)
        ->count();

      //统计user表中状态为1的最高分
      $count = Db::name('user')
        ->where('status',1)
        ->max('score'); 

      //返回id大于5且name
      $data = Db::name('data')
        ->where('id > :id AND name IS NOT NULL', ['id' =>5])
        ->select();


   		//获取最后一条SQL语句
   		echo Db::getLastSql();

   		//查看返回数据
   		dump($data);

      // //单独获取name字段值的时候的返回语句
      // dump($name);

   		
   	




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
}
