<?php
namespace xltxlm\algorithm\排序\插入排序;

/**
 * :类;
 * 假设有序的前提下进行操作;
*/
abstract class 插入排序_implements
{

/* @var array  乱序的数组 */
    protected $out_of_order_array = [];

    /**
    * @return array;
    */
    public function getout_of_order_array():array
    {
        return $this->out_of_order_array;
    }

    /**
    * @param array $out_of_order_array;
    * @return $this
    */
    abstract public function setout_of_order_array(array $out_of_order_array  = []);

    /* @var int  数组的长度 */
    protected $array_length = 0;
    
    /**
    * @return int;
    */
    public function getarray_length():int
    {
        return $this->array_length;
    }

    /**
    * @param int $array_length;
    * @return $this
    */
    protected function setarray_length(int $array_length  = 0)
    {
        $this->array_length = $array_length;
        return $this;
    }

    /**
    *  进行排序操作;
    *  @return :array;
    */
    abstract public function __invoke():array;
}
