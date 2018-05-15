<?php

namespace hkreuter\MyModuleNamespace\Core;

class Registry extends Registry_parent
{

    public static function get($className)
    {
        writeToLog('Module Registry::get ' . $className);

        return parent::get();
    }
}