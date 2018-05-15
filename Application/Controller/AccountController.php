<?php

namespace hkreuter\MyModuleNamespace\Application\Controller;

class AccountController extends AccountController_parent
{
    public function init()
    {
        #writeToLog('Module AccountController::init');
        $this->inheritance();

        $class = get_class($this);
        $out = '';
        while ($class!==false) {
            $out .= $class . ' ';
            $class = get_parent_class($class);
        }
        writeToLog('CHAIN_AccountController ' . $out);

        parent::init();
    }

    public function render()
    {
        $this->inheritance();

        return parent::render();
    }

    protected function inheritance()
    {
        $class = get_class($this);
        $out = '';
        while ($class!==false) {
            $out .= $class . ' ';
            $class = get_parent_class($class);
        }
        writeToLog('CHAIN_AccountController ' . $out);
    }
}