<?php

namespace xltxlm\algorithm\排序;

use xltxlm\algorithm\排序\插入排序\插入排序_implements;

include_once __DIR__ . '/插入排序/插入排序_implements.php';

/**
 * 假设有序的前提下进行操作;
 */
class 插入排序 extends 插入排序\插入排序_implements
{
    /**
     * @param array $out_of_order_array ;
     * @return $this
     */
    public function setout_of_order_array(array $out_of_order_array = [])
    {
        $this->array_length = count($out_of_order_array);
        $this->out_of_order_array = $out_of_order_array;
        return $this;
    }

    public function __invoke(): array
    {
        //从第一个元素开始，该元素可以认为已经被排序；
        //所以索引下标从第1个开始取
        for ($new_var_i = 1; $new_var_i < $this->array_length; $new_var_i++) {
            //存储新取到的值
            $newvar = $this->out_of_order_array[$new_var_i];
            //循环已经排过序的长度
            for ($have_sort_i = $new_var_i - 1; $new_var_i >= 0; $have_sort_i--) {
                //新的值比排序后的最未值下,那么需要交换下位置
                if ($newvar < $this->out_of_order_array[$have_sort_i]) {
                    $this->out_of_order_array[$have_sort_i + 1] = $this->out_of_order_array[$have_sort_i];
                    $this->out_of_order_array[$have_sort_i] = $newvar;
                } else {
                    break;
                }
            }
        }
        return $this->out_of_order_array;
    }

}
