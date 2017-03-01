<?php

namespace Williams\WmsBundle\Model;

use DateTime;

class Weborder {

    /**
     *
     * @var string
     */
    private $orderNumber;

    /**
     *
     * @var string
     */
    private $reference;

    /**
     *
     * @var string
     */
    private $reference2;

    /**
     *
     * @var string
     */
    private $reference3;

    /**
     *
     * @var DateTime
     */
    private $orderDate;

    /**
     *
     * @var DateTime
     */
    private $billingDate;

    /**
     *
     * @var string
     */
    private $invoiceNumber;

    /**
     *
     * @var string
     */
    private $combinedInvoiceNumber;

    /**
     *
     * @var string
     */
    private $notes;

    /**
     *
     * @var DateTime
     */
    private $changedOn;

    /**
     *
     * @var boolean
     */
    private $orderShipped;

    /**
     *
     * @var boolean
     */
    private $orderProblem;

    /**
     *
     * @var boolean
     */
    private $orderCanceled;

    /**
     *
     * @var boolean
     */
    private $orderProcessed;

    /**
     *
     * @var string
     */
    private $customerNumber;

    /**
     *
     * @var string
     */
    private $shipToFirstName;

    /**
     *
     * @var string
     */
    private $shipToLastName;

    /**
     *
     * @var string
     */
    private $shipToAddress1;

    /**
     *
     * @var string
     */
    private $shipToAddress2;

    /**
     *
     * @var string
     */
    private $shipToCity;

    /**
     *
     * @var string
     */
    private $shipToState;

    /**
     *
     * @var string
     */
    private $shipToZip;

    /**
     *
     * @var string
     */
    private $shipToCountry;

    /**
     *
     * @var string
     */
    private $shipToPhone1;

    /**
     *
     * @var string
     */
    private $shipToPhone2;

    /**
     *
     * @var string
     */
    private $shipToFax;

    /**
     *
     * @var string
     */
    private $shipToEmail;

    /**
     *
     * @var string
     */
    private $billToFirstName;

    /**
     *
     * @var string
     */
    private $billToLastName;

    /**
     *
     * @var string
     */
    private $billToAddress1;

    /**
     *
     * @var string
     */
    private $billToAddress2;

    /**
     *
     * @var string
     */
    private $billToCity;

    /**
     *
     * @var string
     */
    private $billToState;

    /**
     *
     * @var string
     */
    private $billToZip;

    /**
     *
     * @var string
     */
    private $billToCountry;

    /**
     *
     * @var string
     */
    private $billToPhone1;

    /**
     *
     * @var string
     */
    private $billToPhone2;

    /**
     *
     * @var string
     */
    private $billToFax;

    /**
     *
     * @var string
     */
    private $billToEmail;

    /**
     *
     * @var string
     */
    private $shipViaCode;

    /**
     *
     * @var WeborderItem[]
     */
    private $items;

    /**
     *
     * @var WeborderShipment[]
     */
    private $shipments;

    public function getOrderNumber() {
        return $this->orderNumber;
    }

    public function getReference() {
        return $this->reference;
    }

    public function getReference2() {
        return $this->reference2;
    }

    public function getReference3() {
        return $this->reference3;
    }

    public function getOrderDate() {
        return $this->orderDate;
    }

    public function getBillingDate() {
        return $this->billingDate;
    }

    public function getInvoiceNumber() {
        return $this->invoiceNumber;
    }

    public function getCombinedInvoiceNumber() {
        return $this->combinedInvoiceNumber;
    }

    public function getNotes() {
        return $this->notes;
    }

    public function getChangedOn() {
        return $this->changedOn;
    }

    public function getOrderShipped() {
        return $this->orderShipped;
    }

    public function getOrderProblem() {
        return $this->orderProblem;
    }

    public function getOrderCanceled() {
        return $this->orderCanceled;
    }

    public function getOrderProcessed() {
        return $this->orderProcessed;
    }

    public function getCustomerNumber() {
        return $this->customerNumber;
    }

    public function getShipToFirstName() {
        return $this->shipToFirstName;
    }

    public function getShipToLastName() {
        return $this->shipToLastName;
    }

    public function getShipToAddress1() {
        return $this->shipToAddress1;
    }

    public function getShipToAddress2() {
        return $this->shipToAddress2;
    }

    public function getShipToCity() {
        return $this->shipToCity;
    }

    public function getShipToState() {
        return $this->shipToState;
    }

    public function getShipToZip() {
        return $this->shipToZip;
    }

    public function getShipToCountry() {
        return $this->shipToCountry;
    }

    public function getShipToPhone1() {
        return $this->shipToPhone1;
    }

    public function getShipToPhone2() {
        return $this->shipToPhone2;
    }

    public function getShipToFax() {
        return $this->shipToFax;
    }

    public function getShipToEmail() {
        return $this->shipToEmail;
    }

    public function getBillToFirstName() {
        return $this->billToFirstName;
    }

    public function getBillToLastName() {
        return $this->billToLastName;
    }

    public function getBillToAddress1() {
        return $this->billToAddress1;
    }

    public function getBillToAddress2() {
        return $this->billToAddress2;
    }

    public function getBillToCity() {
        return $this->billToCity;
    }

    public function getBillToState() {
        return $this->billToState;
    }

    public function getBillToZip() {
        return $this->billToZip;
    }

    public function getBillToCountry() {
        return $this->billToCountry;
    }

    public function getBillToPhone1() {
        return $this->billToPhone1;
    }

    public function getBillToPhone2() {
        return $this->billToPhone2;
    }

    public function getBillToFax() {
        return $this->billToFax;
    }

    public function getBillToEmail() {
        return $this->billToEmail;
    }

    public function getShipViaCode() {
        return $this->shipViaCode;
    }

    public function getItems() {
        return $this->items;
    }

    public function getShipments() {
        return $this->shipments;
    }

    public function setOrderNumber($orderNumber) {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    public function setReference2($reference2) {
        $this->reference2 = $reference2;
        return $this;
    }

    public function setReference3($reference3) {
        $this->reference3 = $reference3;
        return $this;
    }

    public function setOrderDate(DateTime $orderDate) {
        $this->orderDate = $orderDate;
        return $this;
    }

    public function setBillingDate(DateTime $billingDate) {
        $this->billingDate = $billingDate;
        return $this;
    }

    public function setInvoiceNumber($invoiceNumber) {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    public function setCombinedInvoiceNumber($combinedInvoiceNumber) {
        $this->combinedInvoiceNumber = $combinedInvoiceNumber;
        return $this;
    }

    public function setNotes($notes) {
        $this->notes = $notes;
        return $this;
    }

    public function setChangedOn(DateTime $changedOn) {
        $this->changedOn = $changedOn;
        return $this;
    }

    public function setOrderShipped($orderShipped) {
        $this->orderShipped = $orderShipped;
        return $this;
    }

    public function setOrderProblem($orderProblem) {
        $this->orderProblem = $orderProblem;
        return $this;
    }

    public function setOrderCanceled($orderCanceled) {
        $this->orderCanceled = $orderCanceled;
        return $this;
    }

    public function setOrderProcessed($orderProcessed) {
        $this->orderProcessed = $orderProcessed;
        return $this;
    }

    public function setCustomerNumber($customerNumber) {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    public function setShipToFirstName($shipToFirstName) {
        $this->shipToFirstName = $shipToFirstName;
        return $this;
    }

    public function setShipToLastName($shipToLastName) {
        $this->shipToLastName = $shipToLastName;
        return $this;
    }

    public function setShipToAddress1($shipToAddress1) {
        $this->shipToAddress1 = $shipToAddress1;
        return $this;
    }

    public function setShipToAddress2($shipToAddress2) {
        $this->shipToAddress2 = $shipToAddress2;
        return $this;
    }

    public function setShipToCity($shipToCity) {
        $this->shipToCity = $shipToCity;
        return $this;
    }

    public function setShipToState($shipToState) {
        $this->shipToState = $shipToState;
        return $this;
    }

    public function setShipToZip($shipToZip) {
        $this->shipToZip = $shipToZip;
        return $this;
    }

    public function setShipToCountry($shipToCountry) {
        $this->shipToCountry = $shipToCountry;
        return $this;
    }

    public function setShipToPhone1($shipToPhone1) {
        $this->shipToPhone1 = $shipToPhone1;
        return $this;
    }

    public function setShipToPhone2($shipToPhone2) {
        $this->shipToPhone2 = $shipToPhone2;
        return $this;
    }

    public function setShipToFax($shipToFax) {
        $this->shipToFax = $shipToFax;
        return $this;
    }

    public function setShipToEmail($shipToEmail) {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

    public function setBillToFirstName($billToFirstName) {
        $this->billToFirstName = $billToFirstName;
        return $this;
    }

    public function setBillToLastName($billToLastName) {
        $this->billToLastName = $billToLastName;
        return $this;
    }

    public function setBillToAddress1($billToAddress1) {
        $this->billToAddress1 = $billToAddress1;
        return $this;
    }

    public function setBillToAddress2($billToAddress2) {
        $this->billToAddress2 = $billToAddress2;
        return $this;
    }

    public function setBillToCity($billToCity) {
        $this->billToCity = $billToCity;
        return $this;
    }

    public function setBillToState($billToState) {
        $this->billToState = $billToState;
        return $this;
    }

    public function setBillToZip($billToZip) {
        $this->billToZip = $billToZip;
        return $this;
    }

    public function setBillToCountry($billToCountry) {
        $this->billToCountry = $billToCountry;
        return $this;
    }

    public function setBillToPhone1($billToPhone1) {
        $this->billToPhone1 = $billToPhone1;
        return $this;
    }

    public function setBillToPhone2($billToPhone2) {
        $this->billToPhone2 = $billToPhone2;
        return $this;
    }

    public function setBillToFax($billToFax) {
        $this->billToFax = $billToFax;
        return $this;
    }

    public function setBillToEmail($billToEmail) {
        $this->billToEmail = $billToEmail;
        return $this;
    }

    public function setShipViaCode($shipViaCode) {
        $this->shipViaCode = $shipViaCode;
        return $this;
    }

    public function setItems(array $items) {
        $this->items = $items;
        return $this;
    }

    public function setShipments(array $shipments) {
        $this->shipments = $shipments;
        return $this;
    }

}
