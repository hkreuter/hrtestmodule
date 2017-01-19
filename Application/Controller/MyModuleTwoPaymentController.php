<?php

namespace hkreuter\MyModuleNamespaceTwo\Application\Controller;

use oxRegistry;

class MyModuleTwoPaymentController extends MyModuleTwoPaymentController_parent {

    public function render()
    {
        $template = parent::render();

        $model = oxNew(\hkreuter\MyModuleNamespaceTwo\Application\Model\MyModuleModel::class);
        $message = $model->getInfo();

        oxRegistry::getSession()->setVariable('payerror', '-1');
        oxRegistry::getSession()->setVariable('payerrortext', 'Test module prevents payment! ' . microtime(true) . $message);

        return $template;
    }
}
