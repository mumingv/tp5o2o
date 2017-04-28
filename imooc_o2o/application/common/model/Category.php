<?php
namespace app\common\model;

use think\Model;

class Category extends Model
{
    /**
     * 自动增加create_time和update_time字段
     * 说明：该配置等同于数据库的auto_timestamp配置
     */
    //protected $autoWriteTimestamp = true;
    public function add($data) {
        $data['status'] = 1;
        //$data['create_time'] = time();
        return $this->save($data);
    }

    public function getNormalFirstCategory() {
        $data = [
            'status' => 1,
            'parent_id' => 0,
        ];

        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)
            ->order($order)
            ->select();
    }
}
