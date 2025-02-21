<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Payment Method Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during Payment Method for
    | various messages that we need to display to the user.
    |
    */

    "label" => "روش های پرداخت",
    "description" => "مدیریت روش های پرداخت",

    "extensions" => [
        "cash_on_delivery" => [
            "title" => "پرداخت در محل",
            "description" => "پرداخت در محل به صورت نقدی یا کارت به کارت یا دستگاه کارت خوان بانکی انجام می شود.",
            "fields" => [
                "cash" => "پرداخت نقدی",
                "card" => "پرداخت کارت به کارت",
                "pos" => "پرداخت با دستگاه کارت خوان",
            ],
        ],
    ],

];
