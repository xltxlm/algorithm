<?php

namespace xltxlm\algorithm\test\排序\插入排序;

use xltxlm\algorithm\排序\插入排序;

/**
 *
 */
class 重复内容排序_182_0
{
    public function __invoke()
    {
        $插入排序 = (new 插入排序)
            ->setout_of_order_array(['a', 'c', 'b', 'a'])
            ->__invoke();
        p($插入排序);
        assert($插入排序 == ['a', 'a', 'b', 'c']);
    }
}
