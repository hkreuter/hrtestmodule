<?php

namespace hkreuter\MyModuleNamespace\Core;

class UtilsObject extends UtilsObject_parent
{

    public static function getInstance()
    {
        writeToLog('Module UtilsObject::getInstance');

        return parent::getInstance();
    }

    public function oxNew($className)
    {
        writeToLog('Module UtilsObject::oxNew ' . $className);

        return parent::oxNew($className);
    }
}