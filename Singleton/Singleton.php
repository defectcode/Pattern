<?php

class Singleton
{
    private $instance;

    public function getInstance()
    {
        if( empty( $instance ) )
        {
            $this->instance = $this;
        }
        return $this->instance;
    }
}