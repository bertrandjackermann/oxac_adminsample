<?php

/**
 * This is an extension of oxAdminView. oxAdminView should be used for view controllers in
 * the shop admin.
 * 
 * 15/12/1-17/12/7
 * v1.0.0
 *
 */

namespace OxidEsales\OxidAcademy\AdminSample\Controller\admin;

class AdminSample_Main extends oxAdminView {
	
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
