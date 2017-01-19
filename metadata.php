<?php

/**
 * Module information
 */
$aModule = array(
    'id'           => 'hrTestModuleTwo',
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
        \OxidEsales\Eshop\Application\Controller\PaymentController::class => \hkreuter\MyModuleNamespaceTwo\Application\Controller\MyModuleTwoPaymentController::class,
        \OxidEsales\Eshop\Core\Price::class => \hkreuter\MyModuleNamespaceTwo\Application\Model\MyModuleTwoPrice::class
    ),
    'files' => array(
    ),
    'settings' => array(
    )
);
