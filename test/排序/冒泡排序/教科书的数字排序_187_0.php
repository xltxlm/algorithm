<?php

namespace xltxlm\algorithm\test\排序\冒泡排序;

use xltxlm\algorithm\排序\冒泡排序;

/**
 *
 */
class 教科书的数字排序_187_0
{

    public function __invoke()
    {
        $冒泡排序 = (new 冒泡排序)
            ->setout_of_order_array([4, 7, 8, 3, 1, 5, 2, 6])
            ->__invoke();
        p($冒泡排序);
        assert($冒泡排序 == [1, 2, 3, 4, 5, 6, 7, 8]);
    }

}

