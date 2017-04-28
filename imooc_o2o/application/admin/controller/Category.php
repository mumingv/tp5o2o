<?php
namespace app\admin\controller;
use think\Controller;

class Category extends Controller
{
    // 模型对象
    private $obj;

    // 控制器初始化方法，会在控制器方法调用之前执行
    public function _initialize() {
        $this->obj = model("Category");
    }
    
    public function index()
    {
        return $this->fetch();
    }

    public function add() {
        // 获取分类数据
        $categorys = $this->obj->getNormalFirstCategory();
        // 将分类数据传递给模板(第1个参数是默认方法对应的模板，第2个参数是模板使用的数据)
        return $this->fetch('', [
            'categorys' => $categorys, 
        ]);
    }

    public function save() {
        // 获取数据表单数据的几种形式
        //print_r($_POST);  // 方法一：原生方式
        //print_r(input('post.'));  // 方法二：推荐
        //print_r(request()->post());  // 方法三：推荐
        $data = input('post.');
        $validate = validate('Category');
        //if (!$validate->check($data)) {
        if (!$validate->scene('add')->check($data)) {
            $this->error($validate->getError());     
        }

        // 把$data提交给model层
        $res = $this->obj->add($data);
        if ($res) {
            $this->success('新增成功');
        } else {
            $this->error('新增失败');
        }
    }
}
