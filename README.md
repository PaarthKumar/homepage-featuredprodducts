## Overview

This is magento1 module for show the products of any category at homepage, cms pages and static blocks.

## How to use

  Step1 :: Download this module or clone this module.

  Step2 :: Install module at Magento Project.
  
  Step3 :: Go to system->configuration-> Paarth Featured Products. 
  
   * Enable the module.
   * Put the category ids with commas separator.(products will show from this category or categories)
  
 
  Step :: 4 Copy below code to show the products.

  For Xml file
  
   <block type="featuredproducts/products" name="featuredproducts" as="featuredproducts" template="featuredproducts/featuredproducts.phtml"/>

  For cms pages
  
  {{block type="featuredproducts/products" name="featuredproducts" as="featuredproducts" template="featuredproducts/featuredproducts.phtml"}}
