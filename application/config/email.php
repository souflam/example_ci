<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| Email Settings
| -------------------------------------------------------------------
| Configuration of outgoing mail server.
| */

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'mail.ipfops.net';
$config['smtp_port'] = '587';
$config['smtp_timeout'] = '30';
$config['smtp_user'] = 'contact@ipfops.net';
$config['smtp_pass'] = 'contact@2018';
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";
