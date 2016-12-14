<?php
class Rohan_RohanModule_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action {

  public function indexAction() {

  $this->loadLayout();
  $block = $this->getLayout()
         ->createBlock('core/text', 'hello-block')
         ->setText('<h1>Hello World</h1>');

  $this->_addContent($block);
  $this->renderLayout();
 }
}
?>