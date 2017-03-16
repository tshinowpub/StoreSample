<?php

namespace StoreSample\Domain\Entity;

use StoreSample\Domain\Entity\Point;

class Store {

    private $storeId;

    private $name;

    private $point;

    private $address;

    private $tel;

    public function getStoreId()
    {
        return $this->storeId;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPoint(Point $point)
    {
        $this->point = $point;

        return $this;
    }

    public function getPoint()
    {
        return $this->point;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    public function getTel()
    {
        return $this->tel;
    }

}
