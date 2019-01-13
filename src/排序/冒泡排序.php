<?php

namespace xltxlm\algorithm\排序;

use xltxlm\algorithm\排序\冒泡排序\冒泡排序_implements;

/**
 * 排序过程让较大的数往下沉，较小的往上冒，故而叫冒泡法;
 */
class 冒泡排序 extends 冒泡排序\冒泡排序_implements
{
    public function setout_of_order_array(array $out_of_order_array = [])
    {
        $this->array_length = count($out_of_order_array);
        $this->out_of_order_array = $out_of_order_array;
        return $this;
    }

    public function __invoke(): array
    {
        //最后的一个元素不需要比较,所以循环的次数 等于 元素个数 -1
        for ($compare_times = 1; $compare_times < $this->array_length; $compare_times++) {
            //从第一个元素开始，比较相邻的元素，如果第一个比第二个大，就交换他们两个。
            //循环的次数 等于 未冒泡的个数
            for ($new_var_i = 0; $new_var_i < $this->array_length - $compare_times; $new_var_i++) {
                //如果前面的一个比后面一个大，就交换他们两个。
                if ($this->out_of_order_array[$new_var_i] > $this->out_of_order_array[$new_var_i + 1]) {
                    $new_var = $this->out_of_order_array[$new_var_i + 1];
                    $this->out_of_order_array[$new_var_i + 1] = $this->out_of_order_array[$new_var_i];
                    $this->out_of_order_array[$new_var_i] = $new_var;
                }
            }
        }
        return $this->out_of_order_array;
    }

}
