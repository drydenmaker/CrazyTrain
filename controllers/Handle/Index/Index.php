<?php
// make sure you comment this file!
class Handle_Index_Index implements X_Controller_Handler_Interface
{
	/**
	 * indicate if this is a secure handler 
	 *
	 * @var bool
	 */
	public $isSecure = false;

    /**
	 * handle input
	 *
	 * @param Array Filtered SAE (Simple Array Event) Array
	 * @return variant
	 */
	public function handle(X_Broker_Event_Interface $oEvent)
    {
        // do some stuff to handle the $xData
        return 'You have reached an event that has not been handled yet.  (Handeler)<br>'.
            X_Debug::formatHtml($oEvent, '$xData');
    }

}
