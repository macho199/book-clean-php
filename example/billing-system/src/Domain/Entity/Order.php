<?php

namespace CleanPhp\Invoicer\Domain\Entity;

class Order extends AbstractEntity
{
    protected $customer;
    protected $orderNumber;
    protected $description;
    protected $total;


    /**
     * Get the value of customer
     */ 
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */ 
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get the value of orderNumber
     */ 
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set the value of orderNumber
     *
     * @return  self
     */ 
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */ 
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }
}