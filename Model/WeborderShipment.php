<?php

namespace Williams\WmsBundle\Model;

use DateTime;

class WeborderShipment {

    /**
     *
     * @var DateTime
     */
    private $shippingDate;

    /**
     *
     * @var string
     */
    private $trackingNumber;

    /**
     *
     * @var float
     */
    private $shippingCost;

    /**
     *
     * @var string
     */
    private $shippingNotes;

    /**
     *
     * @var string
     */
    private $shippingMethod;

    /**
     *
     * @var string
     */
    private $shippingMethodService;

    /**
     *
     * @var string
     */
    private $shipper;

    /**
     *
     * @var DateTime
     */
    private $problemDate;

    public function getShippingDate() {
        return $this->shippingDate;
    }

    public function getTrackingNumber() {
        return $this->trackingNumber;
    }

    public function getShippingCost() {
        return $this->shippingCost;
    }

    public function getShippingNotes() {
        return $this->shippingNotes;
    }

    public function getShippingMethod() {
        return $this->shippingMethod;
    }

    public function getShippingMethodService() {
        return $this->shippingMethodService;
    }

    public function getShipper() {
        return $this->shipper;
    }

    public function getProblemDate() {
        return $this->problemDate;
    }

    public function setShippingDate($shippingDate) {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    public function setTrackingNumber($trackingNumber) {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function setShippingCost($shippingCost) {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    public function setShippingNotes($shippingNotes) {
        $this->shippingNotes = $shippingNotes;
        return $this;
    }

    public function setShippingMethod($shippingMethod) {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    public function setShippingMethodService($shippingMethodService) {
        $this->shippingMethodService = $shippingMethodService;
        return $this;
    }

    public function setShipper($shipper) {
        $this->shipper = $shipper;
        return $this;
    }

    public function setProblemDate($problemDate) {
        $this->problemDate = $problemDate;
        return $this;
    }

}
