<?php

/**
 * PHPMailer - PHP email creation and transport class.
 * @package PHPMailer
 */

namespace PHPMailer\PHPMailer;

use Exception;
use SMTP;

/**
 * PHPMailer - PHP email creation and transport class.
 * @package PHPMailer
 */
class PHPMailer
{
    /**
     * The PHPMailer Version number.
     * @var string
     */
    const VERSION = '6.5.1';

    /**
     * The SMTP connection instance.
     * @var SMTP
     */
    protected $smtp;

    // Various properties related to email settings
    public $From = '';
    public $FromName = '';
    public $Host = 'localhost';
    public $Port = 25;
    public $SMTPAuth = false;
    public $Username = '';
    public $Password = '';
    public $SMTPSecure = '';
    public $SMTPAutoTLS = true;

    // ... Many other properties ...

    /**
     * Constructor
     * @throws Exception
     */
    public function __construct($exceptions = null)
    {
        // Initialize properties
        $this->exceptions = ($exceptions === true);
        $this->smtp = new SMTP;
        // ... Other initialization code ...
    }

    /**
     * Sets the 'From' address of the email.
     * @param string $address
     * @param string $name
     * @param bool $auto
     * @return bool
     * @throws Exception
     */
    public function setFrom($address, $name = '', $auto = true)
    {
        $this->From = $address;
        $this->FromName = $name;
        // ... Other code ...
    }

    /**
     * Adds a 'To' address.
     * @param string $address
     * @param string $name
     * @return bool
     * @throws Exception
     */
    public function addAddress($address, $name = '')
    {
        // ... Code to add address ...
    }

    /**
     * Sends the email.
     * @return bool
     * @throws Exception
     */
    public function send()
    {
        // ... Code to send the email ...
    }

    // ... Many other methods ...
}
