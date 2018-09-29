<?php
/**
 *
 * @author      Joel Hart
 */
class Mediotype_PinchZoom_Block_Catalog_Product_Media extends Mage_Catalog_Block_Product_View_Media{

    /**
     * @return array Config $key => $value
     */
    public function getConfig(){
        /** @var $helper Mediotype_PinchZoom_Helper_Data */
        $helper =  Mage::helper('mediotype_pinchzoom');
        return $helper->getConfig();
    }

}
