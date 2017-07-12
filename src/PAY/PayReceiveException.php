<?php
namespace Larabookir\Gateway\Pay;
use Larabookir\Gateway\Exceptions\BankException;
class PayReceiveException extends BankException
{
    public static $errors = array(
        -1 => 'ارسال api الزامی می باشد.',
        -2 => 'ارسال transId الزامی می باشد.',
        -3 => 'درگاه پرداختی با api ارسالی یافت نشد و یا غیر فعال می باشد.',
        -4 => 'فروشنده غیر فعال می باشد.',
        -5 => 'چنین تراکنشی در سیستم وجود ندارد و یا موفقیت آمیز نبوده است.',
    );
    public function __construct($errorId)
    {
        $this->errorId = $errorId;
        parent::__construct(@self::$errors[$errorId].' #'.$errorId, $errorId);
    }
}
