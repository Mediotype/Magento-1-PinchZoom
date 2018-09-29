<?php
/**
 * Class Mediotype_PinchZoom_Helper_Data
 */
class Mediotype_PinchZoom_Helper_Data extends Mediotype_Core_Helper_Abstract
{

    const CONFIGURATION_PATH = "mediotype_pinchzoom/imageOptions/";

    protected $configIndicies
        = array(
            "adjustHeight",
            "adjustWidth",
            "animDuration",
            "doubleTapZoom",
            "maxZoom",
            "scaleMode",
            "zoomStep",
        );

    /**
     * @return array Config $key => $value
     */
    public function getConfig()
    {
        $config = array();
        foreach ($this->configIndicies as $key) {
            $config[$key] = $this->getExtensionSystemConfig(self::CONFIGURATION_PATH . $key);
        }
        if (Mage::helper('mediotype_core/debugger')->getEnabled()) {
            Mediotype_Core_Helper_Debugger::log(array("const" => self::CONFIGURATION_PATH, "return" => $config));
        }
        return $config;
    }
}
