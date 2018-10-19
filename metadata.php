<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'          => 'demopay',
    'title'       => array(
        'de' => 'Demopay',
        'en' => 'Demopay',
    ),
    'description' => array(
         'de' => 'demopay Zahlungsmodul',
         'en' => 'demopay Payment module'
    ),
    'thumbnail'   => 'icon.png',
    'version'     => '1.2.1',
    'author'      => 'demopay',
    'url'         => 'https://www.abcxyz.com',
    'email'       => 'technic@abcxyz.com',
    'extend'      => array(   
    ),
    'controllers'       => array(),
    'files'       => array(),
    'templates'   => array(),
    'blocks'      => array(
                            array(
                                'template' => 'page/checkout/payment.tpl',
                                'block'    => 'select_payment',
                                'file'     => '/views/blocks/page/checkout/demopaypayments.tpl'
                                )
                        ),
    'settings'     => array(),
    'events'       => array(
        'onActivate'   => '\oe\demopay\Core\Events::onActivate',
        'onDeactivate' => '\oe\demopay\Core\Events::onDeactivate'
    ),
);

