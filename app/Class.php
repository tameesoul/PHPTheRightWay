<?php

Class Cat{

    /// using Constructor Property Promotion  
    public function __construct( private $Name ,  private $OwnerName ,  private $price)
    {
        // $this->Name = $Name;
        // $this->OwnerName = $OwnerName;
        // $this->price = $price;

        
        /// no need for this 
    }


    public function AddTax(float $tax) : Cat
    {
         $this->price += $tax;
        return $this;
    }

    public function AddDiscount(float $dicount) : Cat
    {
         $this->price -= $dicount;
         return $this;

    }

    public function get_name()
    {
        return $this->Name;
    }

    public function get_owener_name()
    {
        return $this->OwnerName;
    }


    public function get_price()
    {
        return $this->price;
    }

}


/// example for chining methods 
class test
{
    private $result;

    public function __construct($InitValue)
    {
        $this->result = $InitValue;
    }

    public function sum($sum) : test
    {
        $this->result += $sum;
        return $this;
    }

    public function sub($sub) : test
    {
        $this->result -=$sub;
        return $this;
    
    }
}


;