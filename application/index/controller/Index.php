<?php
namespace app\index\controller;
use app\index\model\User;
use think\Input;

class Index
{
    public function add()
    {	
      return view();  
    }

    public function save($name = 'World')
    {
    	// echo 'GET原生态信息';
    	// dump($_GET);
    	// echo 'POST原生态信息';
    	// dump($_POST);
    	// echo 'GET信息';
    	// dump(Input::get());
    	// echo 'GET参数信息';
    	// dump(Input::get('name'));
    	// echo 'POST参数信息';
    	// dump(Input::post('name'));
    	// echo '当前请求的参数：name';
    	// dump(Input::param('name'));
    	// echo '当前请求的参数：username';
    	// dump(Input::param('username'));
    	// echo '当前请求的参数：id';
    	// dump(Input::param('id'));
    	// echo '当同时存在get与post数据时，我们看到param获取的是post数据.<br/>';
    	// return 'hello'.$name.'!';

    	//使用助手函数
    	echo 'GET原生态信息';
    	dump($_GET);
    	echo 'POST原生态信息';
    	dump($_POST);
    	echo 'GET信息';
    	dump(Input('get.'));
    	echo 'GET参数信息';
    	dump(Input('get.name'));
    	echo 'POST参数信息';
    	dump(Input('post.name'));
    	echo '当前请求的参数：name';
    	dump(Input('param.name'));
    	echo '当前请求的参数：username';
    	dump(Input('param.username'));
    	echo '当前请求的参数：id';
    	dump(Input('param.id'));
    	echo '当同时存在get与post数据时，我们看到param获取的是post数据.<br/>';
    	return 'hello'.$name.'!';


    }


public function hello()
{
return redirect('index/error',301);
    }

    
}
