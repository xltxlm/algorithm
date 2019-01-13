<?php

namespace xltxlm\algorithm\test\排序\插入排序;
use xltxlm\algorithm\排序\插入排序;

/**
 *
 */
class 单个数组_181_0
{
    public function __invoke()
    {
        $插入排序 = (new 插入排序)
            ->setout_of_order_array([1])
            ->__invoke();
        p($插入排序);
        assert($插入排序 == [1]);
    }
}
