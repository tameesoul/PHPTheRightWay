<?php

namespace app\Paymentgateway\Enums;


class Paid
{
    public const PAID_STATUS = 'PAID';
    public const PAID_STATU2 = 'DECLINED';
    private const PAID_STATU3 = 'DONE';

    public const AllStatus = [
        self::PAID_STATUS=>'PAID',
        self::PAID_STATU2=>'DECLINED',
    ];
}