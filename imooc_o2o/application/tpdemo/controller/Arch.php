<?php
namespace app\tpdemo\controller;

class Arch
{
    public function index() {
        echo 'path: tpdemo->controller->Arch.php';
    }

    /**
     * 命名空间 -> 自动注册
     * @access public
     * @return void
     */
    public function autoRegister() {
        $test = new \my\Test();
        $test->sayHello();
    }

    /**
     * API友好 -> 数据输出(json)
     * 前提：配置文件config.php中的default_return_type参数取值修改为'json'
     * @access public
     * @return void
     */
    public function dataOutputJson() {
        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        return ['data'=>$data,'code'=>1,'message'=>'操作完成'];
    }

    /**
     * API友好 -> 数据输出(json)
     * @access public
     * @return void
     */
    public function dataOutputJson2() {
        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
    }

    /**
     * API友好 -> 数据输出(xml)
     * @access public
     * @return void
     */
    public function dataOutputXml() {
        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        return xml(['data'=>$data,'code'=>1,'message'=>'操作完成']);
    }
}
