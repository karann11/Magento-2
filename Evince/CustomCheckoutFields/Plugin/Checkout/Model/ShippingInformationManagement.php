<?php

namespace Evince\CustomCheckoutFields\Plugin\Checkout\Model;

class ShippingInformationManagement
{
    
    
    public function beforeSaveAddressInformation(
        \Magento\Checkout\Model\ShippingInformationManagement $subject,
        $cartId,
        \Magento\Checkout\Api\Data\ShippingInformationInterface $addressInformation
    ) {
        $shippingAddress = $addressInformation->getShippingAddress();
        $shippingExtensionAttributes = $shippingAddress->getExtensionAttributes();
        if (!empty($shippingExtensionAttributes)) {
            $shippingExtensionAttributes = $shippingAddress->getExtensionAttributes();
            if (!empty($shippingExtensionAttributes)) {
                $shippingAddress->setDeliveryDate($shippingExtensionAttributes->getDeliveryDate());
            }
        }
    }
}
