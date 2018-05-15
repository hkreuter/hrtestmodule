<?php

namespace hkreuter\MyModuleNamespace\Core;

class ModuleInstaller extends ModuleInstaller_parent
{
    public function __construct(\OxidEsales\Eshop\Core\Module\ModuleCache $moduleCache = null, $moduleCleaner = null)
    {
        writeToLog('Module ModuleInstaller __construct');
        oxNew(\OxidEsales\Eshop\Core\Registry::class);

        parent::__construct($moduleCache, $moduleCleaner);
    }
}