<?php

/**
 * 
 * @author johannes ackermann
 * Widget business logic. Sends current date and time to template.
 * 
 * This is an extension of oxAdminView. oxAdminView should be used for view controllers in
 * the shop admin.
 * 
 * 15/12/1
 * v0.0.1
 *
 */



class oxac_adminsample_main extends oxAdminView
{
    
	
	
	protected $_sThisTemplate = 'oxac_adminsample_main.tpl';
    
	
	
    /**
     * Render. Puts 
     *
     * @return string
     */
    public function render()
    {
		parent::render();
		
    	return $this->_sThisTemplate;
    }
}
