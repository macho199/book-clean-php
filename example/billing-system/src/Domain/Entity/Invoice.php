<?php

namespace CleanPhp\Invoicer\Domain\Entity;

class Invoice extends AbstractEntity
{
    protected $order;
    protected $invoiceDate;
    protected $total;

    /**
     * Get the value of order
     */ 
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set the value of order
     *
     * @return  self
     */ 
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get the value of invoiceDate
     */ 
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set the value of invoiceDate
     *
     * @return  self
     */ 
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

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