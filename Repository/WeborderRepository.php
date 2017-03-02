<?php

namespace Williams\WmsBundle\Repository;

use DateTime;
use SoapClient;
use Williams\WmsBundle\Model\Weborder;
use Williams\WmsBundle\Model\WeborderItem;
use Williams\WmsBundle\Model\WeborderShipment;

class WeborderRepository {

    /**
     *
     * @var SoapClient
     */
    private $client;

    public function __construct(SoapClient $client) {
        $this->client = $client;
    }

    /**
     * 
     * @param string $id
     * @return Weborder
     */
    public function getOrder($id) {

        $order = $this->client->getOrder($id);

        $weborder = new Weborder();

        return $this->loadOrderFromWms($weborder, $order);
    }

    /**
     * 
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @return Weborder[]
     */
    public function findByOrderDate(DateTime $startDate, DateTime $endDate) {

        $ids = $this->client->findByOrderDate($startDate->format('c'), $endDate->format('c'));

        $result = array();

        foreach ($ids as $id) {
            $order = $this->client->getOrder($id);
            $weborder = new Weborder();
            $result[] = $this->loadOrderFromWms($weborder, $order);
        }

        return $result;
    }

    /**
     * 
     * @return Weborder[]
     */
    public function getNewOrders() {

        $newOrders = $this->client->getNewOrders();

        $result = array();

        foreach ($newOrders as $id) {
            $order = $this->client->getOrder($id);
            $weborder = new Weborder();
            $result[] = $this->loadOrderFromWms($weborder, $order);
        }

        return $result;
    }

    /**
     * 
     * @param Weborder $weborder
     * @param stdClass $order
     * @return Weborder
     */
    private function loadOrderFromWms(Weborder $weborder, $order) {

        if (($billingDate = DateTime::createFromFormat('Y-m-d\TH:i:sO', $order->billingDate)) !== false) {
            $weborder->setBillingDate($billingDate);
        }

        if (($orderDate = DateTime::createFromFormat('Y-m-d\TH:i:sO', $order->orderDate)) !== false) {
            $weborder->setOrderDate($orderDate);
        }

        if (($changedOn = DateTime::createFromFormat('Y-m-d\TH:i:sO', $order->changedOn)) !== false) {
            $weborder->setChangedOn($changedOn);
        }

        $weborder->setOrderNumber($order->orderNumber)
                ->setReference($order->reference)
                ->setReference2($order->reference2)
                ->setReference3($order->reference3)
                ->setInvoiceNumber($order->invoiceNumber)
                ->setCombinedInvoiceNumber($order->combinedInvoiceNumber)
                ->setNotes($order->notes)
                ->setOrderShipped($order->orderShipped)
                ->setOrderProblem($order->orderProblem)
                ->setOrderCanceled($order->orderCanceled)
                ->setOrderProcessed($order->orderProcessed)
                ->setCustomerNumber($order->customerNumber)
                ->setShipToFirstName($order->shipToFirstName)
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
                ->setBillToFirstName($order->billToFirstName)
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

            $t = new WeborderShipment();

            if (($shippingDate = DateTime::createFromFormat('Y-m-d\TH:i:sO', $shipment->shippingDate)) !== false) {
                $t->setShippingDate($shippingDate);
            }

            if (($problemDate = DateTime::createFromFormat('Y-m-d\TH:i:sO', $shipment->problemDate)) !== false) {
                $t->setProblemDate($problemDate);
            }

            $t->setTrackingNumber($shipment->trackingNumber)
                    ->setShippingCost($shipment->shippingCost)
                    ->setShippingNotes($shipment->shippingNotes)
                    ->setShippingMethod($shipment->shippingMethod)
                    ->setShippingMethodService($shipment->shippingMethodService)
                    ->setShipper($shipment->shipper);

            $shipments[] = $t;
        }

        $weborder->setShipments($shipments);

        return $weborder;
    }

}
