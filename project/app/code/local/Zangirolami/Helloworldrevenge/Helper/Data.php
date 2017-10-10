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
     * declaration of const uploadDir
     */
    const uploadDir = "helloworldrevengeUpload/";

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

    /**
     * getUploadDir
     * @return string of the directory of the uploaded images
     */
    public function getUploadDir(){
        return self::uploadDir;
    }
}