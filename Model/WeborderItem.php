<?php

namespace Williams\WmsBundle\Model;

class WeborderItem {

    /**
     *
     * @var string
     */
    private $sku;

    /**
     *
     * @var string
     */
    private $name;

    /**
     *
     * @var int
     */
    private $quantity;

    /**
     *
     * @var float
     */
    private $price;

    /**
     *
     * @var int
     */
    private $shipped;

    public function getSku() {
        return $this->sku;
    }

    public function getName() {
        return $this->name;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getShipped() {
        return $this->shipped;
    }

    public function setSku($sku) {
        $this->sku = $sku;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function setShipped($shipped) {
        $this->shipped = $shipped;
        return $this;
    }

}
