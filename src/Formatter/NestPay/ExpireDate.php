<?php
namespace Paranoia\Formatter\NestPay;

use Paranoia\Formatter\FormatterInterface;

class ExpireDate implements FormatterInterface
{
    public function format($input)
    {
        return sprintf('%02s/%04s', $input[0], $input[1]);
    }
}