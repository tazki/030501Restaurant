<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Email extends CI_Email {

    public function __construct($config = array())
    {
            parent::__construct($config);
            // Your own constructor code
    }

    public function valid_email($str)
    {
        if (function_exists('idn_to_ascii') && preg_match('#\A([^@]+)@(.+)\z#', $str, $matches))
        {
            $str = $matches[1].'@'.idn_to_ascii($matches[2], 0, INTL_IDNA_VARIANT_UTS46);
        }
        return (bool) filter_var($str, FILTER_VALIDATE_EMAIL);
    } 

}