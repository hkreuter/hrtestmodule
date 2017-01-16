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
        #'payment' => 'hkreuter/testmodule/Application/Controller/MyModulePaymentController'

        # new style without module namespace
        #\OxidEsales\Eshop\Application\Controller\PaymentController::class => 'hkreuter/testmodule/Application/Controller/MyModulePaymentController'

        # proof of concept, oxSomething class with module namespace
        #'payment' => \hkreuter\MyModuleNamespace\Application\Controller\MyModulePaymentController::class,

        # new style with module namespace
        \OxidEsales\Eshop\Application\Controller\PaymentController::class => \hkreuter\MyModuleNamespace\Application\Controller\MyModulePaymentController::class,
        \OxidEsales\Eshop\Core\Price::class => \hkreuter\MyModuleNamespace\Application\Model\MyModulePrice::class
    ),
    'files' => array(
    ),
    'settings' => array(
    )
);
