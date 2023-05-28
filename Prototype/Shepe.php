<?php

class Shape
{
    private $name;
    private $color;

    public function __clone()
    {
        echo "I'm the clone";
    }


    public function setName( $name )
    {
        $this->name = $name;
    }

    public function setColor( $color )
    {
        $this->color = $color;
    }
} 