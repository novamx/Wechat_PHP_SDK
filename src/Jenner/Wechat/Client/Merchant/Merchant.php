<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-12-15
 * Time: 上午10:15
 */

namespace Jenner\Wechat\Client\Merchant;


use Jenner\Wechat\Client\Client;
use Jenner\Wechat\Config\URI;

class Merchant extends Client
{
    public function __construct()
    {
        parent::__construct();
        $this->uri_prefix = URI::MERCHANT_PREFIX;
    }
} 