<?php
/**
 * Zangirolami Helper Data
 */

/**
 * Zangirolami Helper Data
 *
 * Main Helper
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Zangirolami_Helloworldrevenge_Helper_Data extends Mage_Core_Helper_Abstract {
    /**
     * getConfig
     *
     * @param string $config
     * @return mixed
     */
    public function getConfig($config){
        return Mage::getStoreConfig("zangirolami_helloworldrevenge/" . $config);
    }

    /**
     * isEnabled
     *
     * Returns true if this module is enabled
     * @return bool
     */
    public function isEnabled(){
        return $this->getConfig("configuration/enabled");
    }
}