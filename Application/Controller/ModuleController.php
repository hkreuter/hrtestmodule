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
        $test = oxNew(\OxidEsales\Eshop\Core\Controller\BaseController::class);
        $test->render();

        $test =  oxNew(\OxidEsales\Eshop\Application\Controller\FrontendController::class);
        $test->render();

        $test = oxNew(\OxidEsales\Eshop\Application\Controller\AccountController::class);
        $test->render();

        $class = get_class($this);
        $out = '';
        while ($class!==false) {
            $out .= $class . ' ';
            $class = get_parent_class($class);
        }
        writeToLog('CHAIN_ModuleController ' . $out);

        return parent::render();
    }
}