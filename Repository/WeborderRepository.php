<?php

namespace Williams\WmsBundle\Repository;

use DateTime;
use SoapClient;
use Williams\WmsBundle\Weborder\Weborder;
use Williams\WmsBundle\Weborder\WeborderItem;
use Williams\WmsBundle\Weborder\WeborderShipment;

class WeborderRepository {

    /**
     *
     * @var SoapClient
     */
    private $client;

    public function __construct(SoapClient $client) {
        $this->client = $client;
    }

    public function getOrder($id) {

        $order = $this->client->getOrder($id);

        $weborder = new Weborder();

        return $this->loadOrderFromWms($weborder, $order);
    }
    
    public function getNewOrders() {
        
        $newOrders = $this->client->getNewOrders();
        
        $result = array();
        
        foreach ($newOrders as $order) {
            
            $weborder = new Weborder();
            
            $result[] = loadOrderFromWms($weborder, $order);
            
        }
        
        return $result;
        
    }

    private function loadOrderFromWms(Weborder $weborder, $order) {

        $billingDate = ($order->billingDate != null) ? new DateTime($order->billingDate) : null;

        $weborder->setOrderNumber($order->orderNumber)
                ->setReference($order->reference)
                ->setReference2($order->reference2)
                ->setReference3($order->reference3)
                ->setOrderDate(new DateTime($order->orderDate))
                ->setBillingDate($billingDate)
                ->setInvoiceNumber($order->invoiceNumber)
                ->setCombinedInvoiceNumber($order->combinedInvoiceNumber)
                ->setNotes($order->notes)
                ->setChangedOn(new DateTime($order->changedOn))
                ->setOrderShipped($order->orderShipped)
                ->setOrderProblem($order->orderProblem)
                ->setOrderCanceled($order->orderCanceled)
                ->setOrderProcessed($order->orderProcessed)
                ->setCustomerNumber($order->customerNumber)
                ->setShipToFirstName($order->shipToFistName)
                ->setShipToLastName($order->shipToLastName)
                ->setShipToAddress1($order->shipToAddress1)
                ->setShipToAddress2($order->shipToAddress2)
                ->setShipToCity($order->shipToCity)
                ->setShipToState($order->shipToState)
                ->setShipToZip($order->shipToZip)
                ->setShipToCountry($order->shipToCountry)
                ->setShipToPhone1($order->shipToPhone1)
                ->setShipToPhone2($order->shipToPhone2)
                ->setShipToFax($order->shipToFax)
                ->setShipToEmail($order->shipToEmail)
                ->setBillToFirstName($order->billToFistName)
                ->setBillToLastName($order->billToLastName)
                ->setBillToAddress1($order->billToAddress1)
                ->setBillToAddress2($order->billToAddress2)
                ->setBillToCity($order->billToCity)
                ->setBillToState($order->billToState)
                ->setBillToZip($order->billToZip)
                ->setBillToCountry($order->billToCountry)
                ->setBillToPhone1($order->billToPhone1)
                ->setBillToPhone2($order->billToPhone2)
                ->setBillToFax($order->billToFax)
                ->setBillToEmail($order->billToEmail)
                ->setShipViaCode($order->shipViaCode);

        $items = array();

        foreach ($order->items as $item) {
            $t = new WeborderItem();
            $t->setSku($item->sku)
                    ->setName($item->name)
                    ->setQuantity($item->quantity)
                    ->setPrice($item->price)
                    ->setShipped($item->shipped);
            $items[] = $t;
        }

        $weborder->setItems($items);

        $shipments = array();

        foreach ($order->shipments as $shipment) {

            $shippingDate = $shipment->shippingDate != null ? new DateTime($shipment->shippingDate) : null;
            $problemDate = $shipment->problemDate != null ? new DateTime($shipment->problemDate) : null;

            $t = new WeborderShipment();
            $t->setShippingDate($shippingDate)
                    ->setTrackingNumber($shipment->trackingNumber)
                    ->setShippingCost($shipment->shippingCost)
                    ->setShippingNotes($shipment->shippingNotes)
                    ->setShippingMethod($shipment->shippingMethod)
                    ->setShippingMethodService($shipment->shippingMethodService)
                    ->setShipper($shipment->shipper)
                    ->setProblemDate($problemDate);

            $shipments[] = $t;
        }

        $weborder->setShipments($shipments);

        return $weborder;
    }

}
