<?php

namespace hkreuter\MyModuleNamespace\Application\Controller;

class FrontendController extends FrontendController_parent
{
    public function init()
    {
        #writeToLog('Module FrontendController::init');
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
        writeToLog('CHAIN_FrontendController ' . $out);
    }
}