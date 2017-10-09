<?php
/**
 * Hello World Revenge
 */

/**
 * Hello World Revenge
 *
 * Hello World Revenge Index Controller
 * @author Michael Zangirolami <michael.zangirolami@thinkopen.it>
 * @package Frontend
 * @version 0.1.0
 */

class Zangirolami_Helloworldrevenge_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction(){
        $this->loadLayout();
        $this->renderLayout();
    }
}

/*
    m1.docker.dev/revenge/index/index
    URL/frontName/controller/action
    //come in ZEND
*/