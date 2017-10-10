<?php
/**
 * HelloWorld Revenge
 *
 * Main Block
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @package Frontend
 * @version 0.1.0
 */

class Zangirolami_Helloworldrevenge_Block_Helloworldrevenge extends Mage_Core_Block_Template{

    /**
     * isEnabled
     * @return mixed
     */
    public function isEnabled(){
        return Mage::helper("zangirolami_helloworldrevenge")->isEnabled();
    }

    /**
     * getMessage
     * @return mixed
     */
    public function getMessage(){
        return Mage::helper("zangirolami_helloworldrevenge")->getConfig("configuration/message");
    }

    /**
     * getImageHTML
     * @return string of the img tag to print in HTML
     */
    public function getImageHTML(){
        $helloworldHelper = Mage::helper("zangirolami_helloworldrevenge");
        $image = "<img alt='' style='margin: 0 auto;' src='";
        $image .= Mage::getBaseUrl("media") . $helloworldHelper->getUploadDir() . $helloworldHelper->getConfig("configuration/image");
        $image .= "'/>";
        return $image;
    }

}