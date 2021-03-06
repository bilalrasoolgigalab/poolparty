<?php

namespace SMTP2GOWPPlugin\SMTP2GO\Types\Mail;

class CustomHeader
{
    protected $header;
    protected $value = '';
    /**
     * 
     * @param string $header 
     * @param string $value 
     * @return void 
     */
    public function __construct(string $header, string $value = '')
    {
        $this->header = $header;
        $this->value = $value;
    }
    /**
     * Get the value of value
     */
    public function getvalue()
    {
        return $this->value;
    }
    /**
     * Set the value of value
     *
     * @return  self
     */
    public function setvalue($value)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Get the value of header
     */
    public function getheader()
    {
        return $this->header;
    }
    /**
     * Set the value of header
     *
     * @return  self
     */
    public function setheader($header)
    {
        $this->header = $header;
        return $this;
    }
}
