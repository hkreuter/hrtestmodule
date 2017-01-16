<?php

class MyModulePrice extends MyModulePrice_parent {

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
