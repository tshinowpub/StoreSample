<?php

namespace StoreSample\Domain\Entity;

class Point {

    private $longitude;

    private $latitude;

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this->longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getInclude()
    {
        
    }
}
