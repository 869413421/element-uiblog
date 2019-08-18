<?php
/**
 * Created by PhpStorm.
 * User: 、、、、、、、、、、、
 * Date: 2019/7/2
 * Time: 22:45
 */

namespace App\Models;


trait ModelBaseFunc
{
    public function getAllData($filed = ['*'], $needToArray = true)
    {
        if ($needToArray) {
            return $this->select($filed)->orderBy('id')->limit(10)->get()->toArray();
        } else {
            return $this->select($filed)->get();
        }
    }

    public function getPageData(array $where = [], $pageSize = 20, $order = 'id', $sort = 'DESC')
    {
        return $this->where($where)->orderBy($order, $sort)->paginate($pageSize);
    }

}