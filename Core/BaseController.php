<?php

namespace hkreuter\MyModuleNamespace\Core;

class BaseController extends BaseController_parent
{
    public function init()
    {
        #writeToLog('Module BaseController::init');

        $this->inheritance();

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
        writeToLog('CHAIN_BaseController ' . $out);
    }
}