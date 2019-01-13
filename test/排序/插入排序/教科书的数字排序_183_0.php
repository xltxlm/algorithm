<?php

namespace xltxlm\algorithm\test\排序\插入排序;

use xltxlm\algorithm\排序\插入排序;

/**
 *
 */
class 教科书的数字排序_183_0
{
    public function __invoke()
    {
        $插入排序 = (new 插入排序)
            ->setout_of_order_array([4, 7, 8, 3, 1, 5, 2, 6])
            ->__invoke();
        p($插入排序);
        assert($插入排序 == [1, 2, 3, 4, 5, 6, 7, 8]);
    }
}
