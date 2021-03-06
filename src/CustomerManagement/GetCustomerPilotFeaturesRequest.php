<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of the pilot programs in which the specified customer participates.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.90).aspx GetCustomerPilotFeatures Request Object
 * 
 * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
 */
final class GetCustomerPilotFeaturesRequest
{
    public $CustomerId;
}
