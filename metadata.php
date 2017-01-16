<?php

/**
 * Module information
 */
$aModule = array(
    'id'           => 'hrTestModule',
    'title'        => 'My test module',
    'description'  => 'Double the price. Show payment error message during checkout.',
    'thumbnail'    => 'module.png',
    'version'      => '1.0.0',
    'author'       => 'hkreuter',
    'extend'      => array(
        # old style, no longer recommended
        'payment' => 'hkreuter/hrtestmodule/Application/Controller/MyModulePaymentController',
        'oxprice' => 'hkreuter/hrtestmodule/Application/Model/MyModulePrice'

    ),
    'files' => array('MyModuleModel' => 'hkreuter/hrtestmodule/Application/Model/MyModuleModel.php'
    ),
    'settings' => array(
    )
);
