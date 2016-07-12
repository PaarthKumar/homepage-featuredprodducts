<?php
class Paarth_FeaturedProducts_Block_Products extends Mage_Catalog_Block_Product_List
{
 public function getFeaturedProducts()
     {
        
		     $helperObj    = Mage::helper('featuredproducts');
			 
			 $enableModule =  $helperObj->isEnabled();
			 
		     $categoryids  =  $helperObj->CategoryIds();
			 
			 if($enableModule)
			 {
	
              $base_url = Mage::getBaseUrl();
	          $filterarr=array();
              $filterarr = explode(",", $categoryids);

           $collection = Mage::getResourceModel('catalog/product_collection');
           $collection->addAttributeToSelect("*");
           $collection->addAttributeToFilter('status', 1);
           $collection->addAttributeToFilter('visibility', array('neq' => 1));

            $collection->joinField('category_id', 'catalog/category_product', 'category_id','product_id = entity_id', null, 'left')
         
             ->addAttributeToFilter('category_id', array('in' => array($filterarr)));


            $collection->getSelect()->order(new Zend_Db_Expr('FIELD(category_id, ' . implode(',', $filterarr) . ')'));

            $collection->getSelect()->group('e.entity_id');
			
			return $collection;
		
		}else{
		     
			  return false;
		
		}
		 
		 
     }
    
	
	
	

}