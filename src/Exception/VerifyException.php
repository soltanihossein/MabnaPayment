<?php
/**
 * Created by PhpStorm.
 * User: sadeghpm
 * Date: 2/21/18
 * Time: 7:27 PM
 */

namespace Dpsoft\Saderat\Exception;


class VerifyException extends \Exception
{

    /**
     * VerifyException constructor.
     *
     * @param int $code
     */
    public function __construct(int $code)
    {
        $this->message = $this->codeToMessage((int)$code);
        $this->code = $code;
    }

    private function codeToMessage(int $code)
    {

        $errors = [
            -3  => 'امضای نامعتبر از سمت بانک پذیرنده',
            -1  => 'امضای دیجیتال دارای مشکل است.',
            -2  => 'دسترسی از ادرس IP غیر مجاز صورت پذیرفته است.',
            1   => 'وجود خطا در فرمت ارسالی اطلاعات',
            2   => 'عدم وجود پذيرنده و ترمينال مورد درخواست در يس ستم',
            3   => 'رد درخواست به علت دريافت درخواست توسط آدرس يآ يپ نامعتبر',
            4   => 'پذيرنده مورد نظر امكان استفاده از يس ستم را ندارد.',
            5   => 'برخورد با مشكل در انجام درخواست مورد نظر',
            6   => 'خطا در پردازش درخواست',
            7   => 'بروز خطا در تشخيص اصالت اطلاعات (امضاي دیجیتالی ) نامعتبر است',
            8   => 'شماره خريد ارائه شده توسط پذيرنده (CRN (تكراري . است',
            9   => 'سيستم در حال حاضر قادر به سرويس دهي نمي باشد.',
            102 => 'تراکنش مورد نظر برگشت خورده است.',
            103 => 'تایید انجام نشد',
            106 => 'پیامی از سوییچ پرداخت دریافت نشد.',
            107 => 'تراکنش درخولستی موجود نیست.',
            111 => 'مشکل در ارتباط با سوییچ',
            112 => 'مقادیر ارسالی در درخواست معتبر نیستند.',
            113 => 'خطای سمت سرور بانک پذیرنده ( مربوط به واحد PSP)',
            200 => 'کاربر از انجام تراکنش منصرف شده است.',
        ];

        return !empty($errors[$code]) ? $errors[$code] : 'خطای تعریف نشده!';
    }
}