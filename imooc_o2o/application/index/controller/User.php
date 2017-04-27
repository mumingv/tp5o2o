<?php
namespace app\index\controller;
use think\Controller;

class User extends Controller
{
    /**
     * 登陆URL：http://123.56.21.232:8108/?s=index/user/login
     * 其中：index是模块，user是控制器(对应User.php)，login是方法
     */
    public function login()
    {
        /**
         * Controller类的fetch函数用于展示对应目录下的视图页面(view/user/login.html) 
         */
        return $this->fetch();
    }

    /**
     * 注册URL：http://123.56.21.232:8108/?s=index/user/register
     * 其中：index是模块，user是控制器(对应User.php)，login是方法
     */
    public function register()
    {
        /**
         * Controller类的fetch函数用于展示对应目录下的视图页面(view/user/register.html) 
         */
        return $this->fetch();
    }
}
