<?php
class Amit_Custompayment_Model_Standard extends Mage_Payment_Model_Method_Abstract
{
	
	protected $_code = 'custompayment';
 
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = false;
	protected $_canUseForMultishipping  = false;
	 
	
	public function getOrderPlaceRedirectUrl()
	{
	  return Mage::getUrl('Custompayment/index/index', array('_secure' => true));
	}
	
}
	 