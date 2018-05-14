<?php

namespace hkreuter\MyModuleNamespace\Core;

class Events
{
    public function onActivate()
    {
        writeToLog('activate test module');
        //do something
    }

    public function onDeactivate()
    {
        writeToLog('dectivate test module');
        //do something
    }
}