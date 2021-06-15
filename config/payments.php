<?php

return [

    /*
        List of Registered Payment from IconPay Support
    */
    'registeredPayments' => [
        'linkaja',
        'linkaja-deeplink',
        'ovo',
        'gopay',
        'bca',
        'mandiri',
        'bni',
        'bri',
        'bukopin',
        'btn',
        'bca',
        'doku',
        'mandiri-debit',
        'bca-debit',
        'bri-debit',
        'bni-debit'
    ],

    'defaultGateway' => 'gopay',

    'info' => [
        'linkaja' => [
            'name'             => 'LinkAja',
            'code'             => 'linkaja',
            'alternateCode'    => ['linkaja', 'link-aja', 'link_aja'],
            'callbackFunction' => 'getLinkAjaCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'ID Transaksi',
            'fee_identity'     => 'Admin LinkAja'
        ],
        'linkaja-deeplink' => [
            'name'             => 'LinkAja App',
            'code'             => 'linkaja-deeplink',
            'alternateCode'    => ['linkaja-deeplink', 'linkaja_va'],
            'callbackFunction' => 'getLinkAjaDeeplinkCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'ID Transaksi',
            'fee_identity'     => 'Admin LinkAja'
        ],
        'ovo' => [
            'name'             => 'OVO',
            'code'             => 'ovo',
            'alternateCode'    => ['ovo', 'nobu'],
            'callbackFunction' => 'getOvoCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'ID Transaksi',
            'fee_identity'     => 'Admin OVO'
        ],
        'gopay' => [
            'name'             => 'GoPay',
            'code'             => 'gopay',
            'alternateCode'    => ['gopay', 'go_pay', 'gojek_gopay', 'go-pay'],
            'callbackFunction' => 'getGopayCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'ID Transaksi',
            'fee_identity'     => 'Admin GoPay'
        ],
        'bca' => [
            'name'             => 'BCA VA',
            'code'             => 'bca',
            'alternateCode'    => ['bca', 'bca_va', 'bca-va'],
            'callbackFunction' => 'getBcaVaCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ],
        'mandiri' => [
            'name'             => 'Mandiri VA',
            'code'             => 'mandiri',
            'alternateCode'    => ['mandiri', 'mandiri_va', 'mandiri-va'],
            'callbackFunction' => 'getMandiriVaCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ],
        'bni' => [
            'name'             => 'BNI VA',
            'code'             => 'bni',
            'alternateCode'    => ['bni', 'bni_va', 'bni-va'],
            'callbackFunction' => 'getBniVaCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ],
        'bri' => [
            'name'             => 'BRI VA',
            'code'             => 'bri',
            'alternateCode'    => ['bri', 'bri_va', 'bri-va'],
            'callbackFunction' => 'getBriVaCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ],
        'bukopin' => [
            'name'             => 'Bukopin VA',
            'code'             => 'bukopin',
            'alternateCode'    => ['bukopin', 'bukopin_va', 'bukopin-va'],
            'callbackFunction' => 'getBukopinVaCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ],
        'btn' => [
            'name'             => 'BTN VA',
            'code'             => 'btn',
            'alternateCode'    => ['btn', 'btn_va', 'btn-va'],
            'callbackFunction' => 'getVaCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ],
        'doku' => [
            'name'             => 'DOKU',
            'code'             => 'doku',
            'alternateCode'    => ['doku', 'doku_credit', 'doku_credit_card'],
            'callbackFunction' => 'getDokuCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'ID Transaksi',
            'fee_identity'     => 'Admin Doku'
        ],
        'mandiri-debit' => [
            'name'             => 'Mandiri Debit',
            'code'             => 'mandiri-debit',
            'alternateCode'    => ['mandiri_debit', 'mandiri_direct_debit', 'mandiri-debit'],
            'callbackFunction' => 'getMandiriDebitCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ],
        'bca-debit' => [
            'name'             => 'BCA OneKlik',
            'code'             => 'bca-debit',
            'alternateCode'    => ['bca_debit', 'bca_direct_debit', 'bca_oneklik', 'mandiri-debit'],
            'callbackFunction' => 'getBcaDebitCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ],
        'bri-debit' => [
            'name'             => 'BRI Debit',
            'code'             => 'bri-debit',
            'alternateCode'    => ['bri_debit', 'bri_direct_debit', 'bri-debit'],
            'callbackFunction' => 'getBriDebitCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ],
        'bni-debit' => [
            'name'             => 'BNI Debit',
            'code'             => 'bni-debit',
            'alternateCode'    => ['bni_debit', 'bni_direct_debit', 'bni-debit'],
            'callbackFunction' => 'getBniDebitCallback',
            'callbackClass'    => \PLN\Transaction\Classes\CallbackManager::class,
            'trx_identity'     => 'Virtual Account',
            'fee_identity'     => 'Admin Bank'
        ]
    ],

    'credentialManagement' => [
        'linkaja' => [
            'username'    => env('LINKAJA_USERNAME'),
            'password'    => env('LINKAJA_PASSWORD'),
            'api_key'     => env('LINKAJA_APIKEY'),
            'ip'          => env('LINKAJA_IP'),
            'port'        => env('LINKAJA_PORT'),
            'merchant_id' => env('LINKAJA_MERCHANT_ID', 6017),
        ],
        'linkaja-deeplink' => [
            'username'    => env('LINKAJA_USERNAME'),
            'password'    => env('LINKAJA_PASSWORD'),
            'api_key'     => env('LINKAJA_APIKEY'),
            'ip'          => env('LINKAJA_IP'),
            'port'        => env('LINKAJA_PORT'),
            'merchant_id' => env('LINKAJA_MERCHANT_ID', 6017),
        ],
        'ovo' => [
            'username'    => env('OVO_USERNAME'),
            'password'    => env('OVO_PASSWORD'),
            'api_key'     => env('OVO_APIKEY'),
            'ip'          => env('OVO_IP'),
            'port'        => env('OVO_PORT'),
            'merchant_id' => env('OVO_MERCHANT_ID', 6017),
        ],
        'gopay' => [
            'username'    => env('GOPAY_USERNAME'),
            'password'    => env('GOPAY_PASSWORD'),
            'api_key'     => env('GOPAY_APIKEY'),
            'ip'          => env('GOPAY_IP'),
            'port'        => env('GOPAY_PORT'),
            'merchant_id' => env('GOPAY_MERCHANT_ID', 6017),
        ],
        'bca' => [
            'username'    => env('BCA_USERNAME'),
            'password'    => env('BCA_PASSWORD'),
            'api_key'     => env('BCA_APIKEY'),
            'ip'          => env('BCA_IP'),
            'port'        => env('BCA_PORT'),
            'merchant_id' => env('BCA_MERCHANT_ID', 6017),
        ],
        'mandiri' => [
            'username'    => env('MANDIRI_USERNAME'),
            'password'    => env('MANDIRI_PASSWORD'),
            'api_key'     => env('MANDIRI_APIKEY'),
            'ip'          => env('MANDIRI_IP'),
            'port'        => env('MANDIRI_PORT'),
            'merchant_id' => env('MANDIRI_MERCHANT_ID', 6017),
        ],
        'bni' => [
            'username'    => env('BNI_USERNAME'),
            'password'    => env('BNI_PASSWORD'),
            'api_key'     => env('BNI_APIKEY'),
            'ip'          => env('BNI_IP'),
            'port'        => env('BNI_PORT'),
            'merchant_id' => env('BNI_MERCHANT_ID', 6017),
        ],
        'bri' => [
            'username'    => env('BRI_USERNAME'),
            'password'    => env('BRI_PASSWORD'),
            'api_key'     => env('BRI_APIKEY'),
            'ip'          => env('BRI_IP'),
            'port'        => env('BRI_PORT'),
            'merchant_id' => env('BRI_MERCHANT_ID', 6017),
        ],
        'bukopin' => [
            'username'    => env('BUKOPIN_USERNAME'),
            'password'    => env('BUKOPIN_PASSWORD'),
            'api_key'     => env('BUKOPIN_APIKEY'),
            'ip'          => env('BUKOPIN_IP'),
            'port'        => env('BUKOPIN_PORT'),
            'merchant_id' => env('BUKOPIN_MERCHANT_ID', 6017),
        ],
        'btn' => [
            'username'    => env('BTN_USERNAME'),
            'password'    => env('BTN_PASSWORD'),
            'api_key'     => env('BTN_APIKEY'),
            'ip'          => env('BTN_IP'),
            'port'        => env('BTN_PORT'),
            'merchant_id' => env('BTN_MERCHANT_ID', 6017),
        ],
        'doku' => [
            'username'    => env('DOKU_USERNAME'),
            'password'    => env('DOKU_PASSWORD'),
            'api_key'     => env('DOKU_APIKEY'),
            'ip'          => env('DOKU_IP'),
            'port'        => env('DOKU_PORT'),
            'merchant_id' => env('DOKU_MERCHANT_ID', 6017),
        ],
        'mandiri-debit' => [
            'username'    => env('MANDIRI_DEBIT_USERNAME'),
            'password'    => env('MANDIRI_DEBIT_PASSWORD'),
            'api_key'     => env('MANDIRI_DEBIT_APIKEY'),
            'ip'          => env('MANDIRI_DEBIT_IP'),
            'port'        => env('MANDIRI_DEBIT_PORT'),
            'merchant_id' => env('MANDIRI_DEBIT_MERCHANT_ID', 6017),
        ],
        'bca-debit' => [
            'username'    => env('BCA_DEBIT_USERNAME'),
            'password'    => env('BCA_DEBIT_PASSWORD'),
            'api_key'     => env('BCA_DEBIT_APIKEY'),
            'ip'          => env('BCA_DEBIT_IP'),
            'port'        => env('BCA_DEBIT_PORT'),
            'merchant_id' => env('BCA_DEBIT_MERCHANT_ID', 6017),
        ],
        'bri-debit' => [
            'username'    => env('BRI_DEBIT_USERNAME'),
            'password'    => env('BRI_DEBIT_PASSWORD'),
            'api_key'     => env('BRI_DEBIT_APIKEY'),
            'ip'          => env('BRI_DEBIT_IP'),
            'port'        => env('BRI_DEBIT_PORT'),
            'merchant_id' => env('BRI_DEBIT_MERCHANT_ID', 6017),
        ],
        'bni-debit' => [
            'username'    => env('BNI_DEBIT_USERNAME'),
            'password'    => env('BNI_DEBIT_PASSWORD'),
            'api_key'     => env('BNI_DEBIT_APIKEY'),
            'ip'          => env('BNI_DEBIT_IP'),
            'port'        => env('BNI_DEBIT_PORT'),
            'merchant_id' => env('BNI_DEBIT_MERCHANT_ID', 6017),
        ]
    ],

    'activateTraceLogPayments' => env('ACTIVATE_TRACELOG_PAYMENTS', false),
    'activateTraceLogIconPay'  => env('ACTIVATE_TRACELOG_ICONPAY', false),

    'disablePayments' => explode(',', env('DISABLE_PAYMENTS', '')),

    'gatewayTypes' => [
        'credit_card'        => 'Kartu Kredit',
        'instant_debit'      => 'Dompet Digital',
        'instant_debit_card' => 'Kartu Debit Instan',
        'va'                 => 'Virtual Account',
    ],

    'registeredFeatures' => [
        'postpaid'  => 'Pascabayar / Postpaid',
        'prepaid'   => 'Prabayar / Prepaid',
        'stroomnet' => 'ICONNET',
        'nontaglis' => 'Non Taglis',
        'listriqu'  => 'ListriQu'
    ],

    'infoFeatures' => [
        'postpaid' => [
            'name'  => 'Paskabayar',
            'code'  => 'postpaid',
        ],
        'prepaid' => [
            'name'  => 'Prabayar',
            'code'  => 'prepaid',
        ],
        'stroomnet' => [
            'name'  => 'ICONNET',
            'code'  => 'ICONNET',
            'defaultGateway' => [
                'linkaja-deeplink',
                'gopay',
                'ovo',
            ]
        ],
        'nontaglis' => [
            'name'  => 'Non Taglis',
            'code'  => 'nontaglis',
        ],
        'listriqu' => [
            'name'  => 'ListriQu',
            'code'  => 'listriqu'
        ]
    ]
];