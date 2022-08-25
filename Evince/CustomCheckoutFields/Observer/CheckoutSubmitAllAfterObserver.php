<?php

namespace Evince\CustomCheckoutFields\Observer;

class CheckoutSubmitAllAfterObserver implements \Magento\Framework\Event\ObserverInterface
{
    
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        $quote = $observer->getEvent()->getQuote();
        if (empty($order) || empty($quote)) {
            return $this;
        }

        $shippingAddress = $quote->getShippingAddress();
        if ($shippingAddress->getDeliveryDate()) {
            $orderShippingAddress = $order->getShippingAddress();
            $orderShippingAddress->setDeliveryDate(
                $shippingAddress->getDeliveryDate()
            )->save();
        }

        return $this;
    }
}
