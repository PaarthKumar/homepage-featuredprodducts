<?php

class Paarth_FeaturedProducts_Helper_Data extends Mage_Core_Helper_Abstract
{
              
	  const XML_PATH_ENABLED = 'featuredproduct_configuration/options/featuredproduct_enable';
	  const XML_PATH_CATEGORY_IDS = 'featuredproduct_configuration/options/featuredproduct_categoryid';
	  
	  
	  
	     public function isEnabled($store = null)
    {
        return  Mage::getStoreConfig(self::XML_PATH_ENABLED, $store);
    }  
	  
	  
	     public function CategoryIds($store = null)
    {
        return  Mage::getStoreConfig(self::XML_PATH_CATEGORY_IDS, $store);
    }  
			  
			  
			  
}