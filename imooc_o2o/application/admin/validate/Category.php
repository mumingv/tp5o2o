<?php
namespace app\admin\validate;
use think\Validate;

class Category extends Validate {
    protected $rule = [
        ['name', 'require|max:10', '分类名称不能为空|分类名称长度不能超过10个字符'],
        ['parent_id', 'number'],
        ['id', 'number'],
        ['status', 'number|in:-1,0,1', '状态必须是数字|状态范围不合法'],
        ['listorder', 'number'],
    ];

    /**场景设置**/
    protected $scene = [
        'add' => ['name', 'parent_id'],  // 添加功能
        'listorder' => ['id', 'listorder'],  // 排序功能
    ];
}
