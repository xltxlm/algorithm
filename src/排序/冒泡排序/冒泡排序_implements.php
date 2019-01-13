<?php
namespace xltxlm\algorithm\排序\冒泡排序;

/**
 * :类;
 * 排序过程让较大的数往下沉，较小的往上冒，故而叫冒泡法;
*/
abstract class 冒泡排序_implements
{

/* @var int   */
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

    /* @var array   */
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

    /**
    *  实施排序算法;
    *  @return :array;
    */
    abstract public function __invoke():array;
}
