<?php
/**
 * Class MatthewAnstey_DebugHandles_Block_Log
 */
class MatthewAnstey_DebugHandles_Block_Log extends Mage_Core_Block_Template
{
    public function getHandles()
    {   
    	$handles = Mage::app()->getLayout()->getUpdate()->getHandles();
        return Mage::helper('core')->jsonEncode($handles);
    }
}