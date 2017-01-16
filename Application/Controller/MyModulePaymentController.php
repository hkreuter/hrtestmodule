<?php

class MyModulePaymentController extends MyModulePaymentController_parent {

    public function render()
    {
        $template = parent::render();

        $model = oxNew('MyModuleModel');
        $message = $model->getInfo();

        oxRegistry::getSession()->setVariable('payerror', '-1');
        oxRegistry::getSession()->setVariable('payerrortext', 'Test module prevents payment! ' . microtime(true) . $message);

        return $template;
    }
}
