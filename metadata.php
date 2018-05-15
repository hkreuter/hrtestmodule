<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'           => 'hrTestModule',
    'title'        => 'My test module',
    'description'  => 'Double the price. Show payment error message during checkout.',
    'thumbnail'    => 'module.png',
    'version'      => '1.0.0',
    'author'       => 'hkreuter',
    'extend'       => [
        #\OxidEsales\Eshop\Core\Registry::class => \hkreuter\MyModuleNamespace\Core\Registry::class,
        #\OxidEsales\Eshop\Core\UtilsObject::class => \hkreuter\MyModuleNamespace\Core\UtilsObject::class,
        #\OxidEsales\Eshop\Core\Module\ModuleInstaller::class => \hkreuter\MyModuleNamespace\Core\ModuleInstaller::class,

        \OxidEsales\Eshop\Core\Controller\BaseController::class => \hkreuter\MyModuleNamespace\Core\BaseController::class,
        \OxidEsales\Eshop\Application\Controller\FrontendController::class => \hkreuter\MyModuleNamespace\Application\Controller\FrontendController::class,
        \OxidEsales\Eshop\Application\Controller\AccountController::class => \hkreuter\MyModuleNamespace\Application\Controller\AccountController::class,

        # old style, no longer recommended
        #'payment' => 'hkreuter/testmodule/Application/Controller/MyModulePaymentController'

        # new style without module namespace
        #\OxidEsales\Eshop\Application\Controller\PaymentController::class => 'hkreuter/testmodule/Application/Controller/MyModulePaymentController'

        # new style with module namespace
        \OxidEsales\Eshop\Application\Controller\PaymentController::class => \hkreuter\MyModuleNamespace\Application\Controller\MyModulePaymentController::class,
        \OxidEsales\Eshop\Core\Price::class => \hkreuter\MyModuleNamespace\Application\Model\MyModulePrice::class
    ],
    'controllers'  => ['testcontroller' => \hkreuter\MyModuleNamespace\Application\Controller\ModuleController::class],
    'events'       => [
        'onActivate'   => '\hkreuter\MyModuleNamespace\Core\Events::onActivate',
        'onDeactivate' => '\hkreuter\MyModuleNamespace\Core\Events::onDeactivate'],
    'templates'    => ['module_own_controller.tpl' => 'hkreuter/hrtestmodule/Application/views/tpl/module_own_controller.tpl'],
    'blocks'       => [
        [
            'template' => 'layout/header.tpl',
            'block'    => 'header_main',
            'file'     => 'Application/views/blocks/header_main.tpl',
            'position' => '10'
        ]
    ],
    'settings'     => [
        [
            'group' => 'customize',
            'name'  => 'blSomeSetting',
            'type'  => 'bool',
            'value' => 1,
        ]
    ],
];


