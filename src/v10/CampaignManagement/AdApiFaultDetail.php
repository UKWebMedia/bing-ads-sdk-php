<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Defines a fault object that operations return when generic errors occur, such as an authentication error.
 *
 * @link http://msdn.microsoft.com/en-us/library/dd797002(v=msads.100).aspx AdApiFaultDetail Data Object
 * 
 * @uses AdApiError
 */
final class AdApiFaultDetail extends ApplicationFault
{
    /**
     * An array of AdApiError objects that contains the details that explain why the service operation failed.
     *
     * @var AdApiError[]
     */
    public $Errors;
}
