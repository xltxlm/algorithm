<?php

namespace xltxlm\algorithm\test\排序\冒泡排序;

use xltxlm\algorithm\排序\冒泡排序;

/**
 *
 */
class 空数组_184_0
{
    public function __invoke()
    {
        $冒泡排序 = (new 冒泡排序)
            ->setout_of_order_array([])
            ->__invoke();
        p($冒泡排序);
        assert($冒泡排序 == []);
    }
}
