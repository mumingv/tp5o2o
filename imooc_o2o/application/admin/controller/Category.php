<?php
namespace app\admin\controller;
use think\Controller;

class Category extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function add() {
        return $this->fetch();
    }

    public function save() {
        // 获取数据表单数据的几种形式
        //print_r($_POST);  // 方法一：原生方式
        //print_r(input('post.'));  // 方法二：推荐
        print_r(request()->post());  // 方法三：推荐
    }
}
