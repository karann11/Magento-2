<?php
namespace Harsh\Customoverride\Block;
use Magento\Framework\View\Element\Template;
class ContactForm extends \Magento\Contact\Block\ContactForm{


public function getText() 
{ 
return "Override Text"; 
}
}