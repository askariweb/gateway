<?php
namespace Larabookir\Gateway\Pay;
use Larabookir\Gateway\Exceptions\BankException;
class PaySendException extends BankException
{
    public static $errors = array(
        -1 => 'ارسال api الزامی می باشد.',
        -2 => '	ارسال amount ( مبلغ تراکنش ) الزامی می باشد.',
        -3 => 'amount ( مبلغ تراکنش )باید به صورت عددی باشد.',
        -4 => 'amount نباید کمتر از 1000 باشد.',
        -5 => 'ارسال redirect الزامی می باشد',
        -6 => 'درگاه پرداختی با api ارسالی یافت نشد و یا غیر فعال می باشد',
        -7 => 'فروشنده غیر فعال می باشد',
        -8 => 'تراکنش با خطا مواجه شد.',
    );
    public function __construct($errorId)
    {
        $this->errorId = $errorId;
        parent::__construct(@self::$errors[$errorId].' #'.$errorId, $errorId);
    }
}
