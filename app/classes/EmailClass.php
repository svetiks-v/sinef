<?php

namespace App\classes;

use PHPMailerAutoload;
use PHPMailer;

/**
 * Класс отправки писем на почту
 */
class EmailClass
{

    public $email;
    public $files = array();
    public $from = 'From';
    public $from_name = 'Сайт';
    public $subject = 'Тема';
    public $text = '';
    private $array_emails = array();

    public function __construct()
    {
        
    }

    /**
     * Добавить email адрес кому отправляет письмо
     * @param string $email
     * @param string $name_email - Имя отправителя
     * @return boolean
     */
    public function addAddress($email, $name_email = '')
    {
        if (validatorClass::isValidEmail($email)) {
            $this->array_emails[$email] = $name_email;
            return true;
        }
        return false;
    }

    /**
     * Установить признак того что письмо должно быть подтверждено
     * @param string $email
     */
    public function confirmReadingTo($email)
    {
        $this->email->ConfirmReadingTo = $email;
    }

    /**
     * Добавить файл к письму
     * @param string $patch_file
     */
    public function addFile($patch_file)
    {
        $this->files[] = $patch_file;
    }

    /**
     * Отправить письма через Php-mailer
     * @return boolean
     */
    public function sendEmailPHPmailer()
    {
      //  require_once($_SERVER['DOCUMENT_ROOT'] . '/library/phpmailer/class.phpmailer.php');
        $this->email = new PHPMailer(true);
        $this->email->AddCustomHeader('Content-Type: text/html; charset="windows-1251"');
        $this->email->CharSet = "windows-1251";
        $this->email->From = $this->from;
        $this->email->FromName = iconv("utf-8", "windows-1251", $this->from_name);
        $this->email->Subject = iconv("utf-8", "windows-1251", $this->subject);
        $this->email->Body = iconv("utf-8", "windows-1251", $this->text);
        if (count($this->files) > 0) {
            foreach ($this->files as $file)
                $this->email->AddAttachment($file);
        }

        $this->email->IsHTML(true);
        if (count($this->array_emails) > 0) {
            foreach ($this->array_emails as $email => $name) {
                $this->email->AddAddress($email, iconv("utf-8", "windows-1251", $name));
            }
            return $this->email->Send();
        }
        return false;
    }

    /**
     * Отправка письма методами пхп
     * @return bool
     */
    public function sendEmailPHP()
    {       
        mb_internal_encoding('windows-1251');       
        $header = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
        $header .= "From: {$this->from}";
        $body = iconv("utf-8", "windows-1251", $this->text);
        $thema = iconv("utf-8", "windows-1251", $this->subject);
        $email = $this->email;
        $result = mail($email, $thema, $body, $header);

//        if (count($this->array_emails) > 0) {
//            foreach ($this->array_emails as $email => $name) {
//                $result = mail($email, $thema, $body, $header);
//            }
//        }
        return $result;
    }


    /**
     * Отправка письма через lib
     * @return bool
     */
    public function sendEmailLib()
    {
        $mail = new \Mail();
        $mail->From( self::convertTo1251Curl($this->from_name) . ';' . $this->from_name);
        $mail->To( $this->email );
        $mail->Subject(self::convertTo1251Curl($this->subject ));
        $mail->Body(self::convertTo1251Curl($this->text));
        $mail->Priority(2) ;
        return $mail->Send();
    }

    /**
     * Отправка письма методом Зенда
     */
    public function sendEmailZendMail()
    {
        $MailObj = new Zend_Mail('UTF-8');
        $MailObj->addHeader('X-Priority', '1 (Higuest)');
        $MailObj->setBodyHtml($this->text);

        $MailObj->setFrom($this->from);
        $MailObj->setSubject($this->subject);
        $MailObj->addTo($this->email);

        if (count($this->array_emails) > 0) {
            foreach ($this->array_emails as $email => $name) {
                $MailObj->addTo($email);
            }
        }
        $result = $MailObj->send();
        return $result;
        unset($MailObj);
    }


    /**
     * Конвертирует строуку из utf в 1251
     * @param string $string
     * @return string
     */
    private static function convertTo1251Curl($string)
    {
        return iconv('utf-8', 'windows-1251', $string);
    }

    /**
     * Конвертация из utf в 1251 с дополнительной конвертацияей в
     * (%) с последующими двумя 16-ричными цифрами и пробелами
     * @param string $string
     * @return string
     */
    private static function convertTo1251($string)
    {
        return urlencode(iconv('utf-8', 'windows-1251', $string));
    }


}

//  Примеры работы с классом
//	    $mail = new EmailClass();
//	    $mail->from = 'mail@megaresort.ru';
//	    $mail->from_name='От кого сообщение';
//	    $mail->subject='Тема сообщения';
//	    $mail->text='Тело сообщения';
//	    $mail->addAddress('sholeninov@mail.ru', 'Шоленинов');
//	    $mail->addFile($_SERVER['DOCUMENT_ROOT'].'/public/files/areas2.xlsx');
//	    
//	    $mail->sendEmailPHPmailer();
//	    $mail->sendEmailZendMail();
//	    $mail->sendEmailPHP();


           // mb_internal_encoding('windows-1251'); 
//            $hdr = 'MIME-Version: 1.0' . "\r\n";
//            $hdr .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
//            $hdr .= 'From: vladKramatorsk@mail';
//            $body =  iconv("utf-8", "windows-1251", 'тело сообщения');
//	    $thema = iconv("utf-8", "windows-1251", 'тема');
            //$rr = mail( 'sholeninov@mail.ru', $thema , $body , $hdr );


