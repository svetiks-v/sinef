<?php

namespace App\classes;

use App\classes\EmailClass;

/**
 * Класс отправки писем на почту
 */
class LetterEmailClass
{
    const PATH_TEMPLATE_LETTER = 'resources/views/emails/';

    

    /**
     * Отправить сообщение о подтверждении регистрации
     * @param $data_from_form
     * @return bool
     */
    public static function sendEmailConfirmRegistration($data_from_form)
    {
        $mail = new EmailClass();
     //  $mail->from = $_ENV['MAIL_EMAIL_FROM'];
        $mail->from = 'svetiks-v@mail.ru';
        $mail->from_name = 'system';
        $mail->subject = 'Подтверждение регистрации';
        $data_from_form['url'] = config('app.url');
        $data_from_form['system_name'] = config('app.name');
        $mail->text = self::fillTemplate($data_from_form, 'confirm_registration.php');
        $mail->email = $data_from_form['email'];
        return $mail->sendEmailPHP();
    }

    /**
     * Произвести наполнение шаблона письма данными с массива $data
     * элементы массива заменяются по признаку {key} заключенное в фигурные скобки
     * все элементы {блабла} не имеющиеся в массиве данные удаляются из шаблона
     * значения типа null заменяются на пробел
     * @param $data - массив с данными
     * @param $name_template
     * @return mixed|string
     */
    private static function fillTemplate($data, $name_template)
    {
        $template_letter = '';
        $path_template_letter = $_SERVER['DOCUMENT_ROOT'] . '/' . self::PATH_TEMPLATE_LETTER . $name_template;

        if (file_exists($path_template_letter)) {
            $template_letter = file_get_contents($path_template_letter);
            foreach ($data as $key => $value){
                if ($value == null) {
                    $value = '';
                }
                $template_letter = str_replace('{' . $key . '}', $value, $template_letter);
            }
        }
        $template_letter = preg_replace("/\{[A-Za-z0-9\_\-]+\}/",'',$template_letter);
        return $template_letter;
    }
}
