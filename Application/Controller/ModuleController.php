<?php

namespace hkreuter\MyModuleNamespace\Application\Controller;

/**
 * Class ModuleController
 *
 * @package hkreuter\MyModuleNamespace\Application\Controller
 */
class ModuleController extends \OxidEsales\Eshop\Application\Controller\FrontendController
{
    /**
    * Current class default template name.
    *
    * @var string
    */
    protected $_sThisTemplate = 'module_own_controller.tpl';

    public function render()
    {
        return parent::render();
    }
}