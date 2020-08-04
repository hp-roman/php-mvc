<?php
class Converter
{
    protected $from;
    protected $to;
    public function __construct($from = '', $to = '')
    {
        $this->from = $from;
        $this->to = $to;
    }
    public function setFrom($from)
    {
        $this->from = $from;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function upperfirstletter()
    {
        $this->to = $this->from;
        $this->to[0] = strtoupper($this->from[0]);
        return $this->to;
    }
}
