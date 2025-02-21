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

    "label" => "Payment Method",
    "description" => "Manage Payment Method",

    "extensions" => [
        "cash_on_delivery" => [
            "title" => "Cash On Delivery",
            "description" => "Cash on delivery is a payment method where the recipient makes payment for the goods at the time of delivery rather than in advance.",
            "fields" => [
                "cash" => "Cash Payment",
                "card" => "Card Payment",
                "pos" => "POS Payment",
            ],
        ],
    ],

];
