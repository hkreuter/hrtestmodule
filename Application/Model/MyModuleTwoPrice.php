<?php

namespace hkreuter\MyModuleNamespaceTwo\Application\Model;

class MyModuleTwoPrice extends MyModuleTwoPrice_parent {

    /**
     * Double the original price
     *
     * @return double
     */
    public function getPrice()
    {
        $return = parent::getPrice();
        return 2*$return;
    }
}
