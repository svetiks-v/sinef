<?php

namespace App\classes\MyClass;

class GF
{

    /**
     * Рандомно перемешать массив с сохранением ключей
     */
    function shuffle_assoc(array &$in)
    {
        $result = array();
        while ($key = array_rand($in)) {
            $result[$key] = $in[$key];
            unset($in[$key]);
        }
        $in = $result;
    }

    static function getSqlValue($value)
    {
        $value_triming = trim($value);
        $value_low = mb_strtolower($value_triming);
        $array_operation = array(
            'not like ',
            'is not ',
            'is ',
            'like ',
            'in ',
            'not ',
            'between ',
            '=',
            '<>',
            '>=',
            '<=',
            '>',
            '<'
        );
        foreach ($array_operation as $operation) {
            $pos = strpos($value_low, $operation);
            if ($pos === 0) {
                $value_without_operation = trim(substr($value_triming, strlen($operation)));
                if (mb_strtolower($value_without_operation) == 'null') {
                    return $value_triming;
                }
                return $operation . ' "' . $value_without_operation . '"';
            }
        }
        return '"' . addslashes($value_triming) . '"';
    }

    static function checkOperationInValue($value)
    {
        $value_low = mb_strtolower(trim($value));
        $array_operation = array(
            'not like',
            'is not',
            'is',
            'like ',
            'in ',
            'not ',
            'between',
            '=',
            '<>',
            '>=',
            '<=',
            '>',
            '<'
        );
        foreach ($array_operation as $operation) {
            $pos = strpos($value_low, $operation);
            if ($pos === 0) {
                return true;
            }
        }
        return false;
    }

    /**
     * Проверяет статус, чтобы он был yes/no присваивает по дефаулту $default_status
     * @param yes / no $default_status
     * @param string $default_status
     * @internal param \yes $string / no
     * @return string
     */
    static function checkStatusYesNo($status, $default_status = 'yes')
    {
        if ($status === true || $status === 1 || $status === '1') {
            $status = 'yes';
        }
        if ($status === false || 0 === $status || $status === '0') {
            $status = 'no';
        }
        if ($status != 'yes' && $status != 'no') {
            $status = $default_status;
        }
        return $status;
    }

    /**
     * Проверяет наличие в мемкеше данных по ключу
     * @param string $key - ключ к данным мемкешу
     * @param mix $data - данные кооторые надо проверить наличик в мемкеше
     * @return boolean
     */
    static function hasDataInMemCache($key, $data)
    {
        $memcache = new Memcache;
        $memcache->connect('127.0.0.1', 11211) or die(5);
        if ($memcache->get($key) == $data) {
            return true;
        }
        return false;
    }

    /**
     * записать даныне в мемкеш
     * @param string $key - ключ к данным мемкешу
     * @param mix $data - данные кооторые надо сохранить в мемкеше
     * @param int $time - время хранения в мемкеше
     */
    static function setMemCache($key, $data, $time)
    {
        $memcache = new Memcache;
        $memcache->connect('localhost', 11211) or die(5);
        $memcache->set($key, $data, false, $time);
    }

    /**
     * взять даныне с мемкеш
     * @param string $key - ключ к данным мемкешу
     * @param mix $data - данные кооторые надо сохранить в мемкеше
     */
    static function getMemCache($key)
    {
        $memcache = new Memcache;
        $memcache->connect('127.0.0.1', 11211) or die(5);
        $data = $memcache->get($key);
        return $data;
    }

    // Пример 
    // if ($this->checkFrequency && GF::getMemcache('PHPSESSID', $_COOKIE['PHPSESSID'])==false) {
    //	    GF::setMemcache('PHPSESSID', $_COOKIE['PHPSESSID'], $this->time_live_memcache);
    // }

    /**
     * Cоздание десятичного хэша
     * @param string $data
     * @param int $count_digital
     * @return string
     */
    static function create_hex_hash($data, $count_digital = 11)
    {
        $data_lower = mb_strtolower(trim($data), 'utf-8');
        return hexdec(mb_substr(md5($data_lower), 0, $count_digital));
    }

    /**
     * Функция преобразования ФИО в формат Фамилия И.О.
     * @param string $surname
     * @param string $name
     * @param string $patronymic
     * @param boolean $full - полное или не полное имя
     * @return string
     */
    static function transformFio($surname, $name, $patronymic = '', $full = false)
    {
        $fio = $surname;
        if (!empty($name)) {
            $fio .= ' ' . mb_substr($name, 0, 1) . '.';
        }
        if (!empty($patronymic)) {
            $fio .= (!empty($patronymic)) ? mb_substr($patronymic, 0, 1) . '.' : '';
        }
        if ($full) {
            $fio = $surname . ' ' . $name . ' ' . $patronymic;
        }
        return trim($fio);
    }

    // Массивы    

    /**
     * Определяет номер значения $value_search в массиве $array, начиная с 1
     * @param mixed $value_search
     * @param array $array
     * @return int
     */
    static function getPositionKeyInArray($value_search, $array)
    {
        $i = 1;
        foreach ($array as $value) {
            if ($value == $value_search) {
                return $i;
            }
            $i++;
        }
        return -1;
    }

    /**
     * Сформировать массив значений из строки разделенный некоторыми символами
     * @param string $string
     * @return array
     */
    static function str2array($string)
    {
        $new_string = str_replace(array(';', '/', '|'), ',', $string);
        $array_explode = explode(',', $new_string);
        $array_explode_triming = GF::trimArrayString($array_explode);
        $array_explode_noempty = array_diff($array_explode_triming, array(''));
        return $array_explode_noempty;
    }

    /**
     * Фукнция удаляет все пробелы в строке
     * @param string $string
     * @return string
     */
    static function deleteSpace($string)
    {
        return str_replace(array(' '), '', $string);
    }

    static function mb_ucfirst($str, $encoding = 'UTF-8')
    {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) .
            mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }

    /**
     * Разбивает строку типа a=2 на массив - типа a => 2
     * @param string $string
     * @return array
     */
    static function strEqual2Array($string)
    {
        $string_withot_space = GF::deleteSpace($string);
        $string_with_coma = str_replace(array(';', '/', '|'), ',', $string_withot_space);
        $array_sentens = explode(',', $string_with_coma);
        foreach ($array_sentens as $sentens) {
            $array_expretion = explode('=', $sentens);
            $array_expretion_triming = GF::trimArrayString($array_expretion);
            $name_field = reset($array_expretion_triming);
            $value_field = next($array_expretion_triming);
            $result_array[$name_field] = $value_field;
        }
        return $result_array;
    }

    // Удаление концевых пробелов в массиве строк
    static function trimArrayString($array_string)
    {
        $transform_array = array();
        if (is_array($array_string)) {
            if (count($array_string) > 0) {
                foreach ($array_string as $key => $value) {
                    $transform_array[$key] = trim($value);
                }
            }
        } else {
            $transform_array [] = trim($array_string);
        }
        return $transform_array;
    }

    /**
     * Преобразовать весь массив строк в нижний резистр
     * @param array $array_string - массив с строками
     * @return array - переработанный массив
     */
    static function strtolowerArrayString($array_string)
    {
        $transform_array = array();
        if (is_array($array_string)) {
            if (count($array_string) > 0) {
                foreach ($array_string as $key => $value) {
                    $transform_array[$key] = strtolower($value);
                }
            }
        } else {
            $transform_array [] = strtolower($array_string, "UTf-8");
        }
        return $transform_array;
    }

    /**
     * Удалить из массива пустые элементы
     * @param array $array_for_check
     * @return array - переработанный массив
     */
    static function deleteEmptyValueFromArray($array_for_check)
    {
        $new_array = array();
        foreach ($array_for_check as $name_field => $value_field) {
            if ($value_field != "") {
                $new_array[$name_field] = $value_field;
            }
        }
        return $new_array;
    }

    /**
     * Определяет количество пустых элементов в массиве
     * @param array $array_string - массив в котором надо подсчитать
     * @return int - количество
     */
    static function kolEmptyItemsArray($array_string)
    {
        $array_string_triming = GF::trimArrayString($array_string);
        $i = 0;
        foreach ($array_string_triming as $item) {
            if (empty($item)) {
                $i += 1;
            }
        }
        return $i;
    }

    /**
     * генерирование пароля
     * @return string
     */
    static function generatePassword()
    {
        $array_symbol = array(
            "latin_low" => array(
                'a',
                'b',
                'c',
                'd',
                'e',
                'f',
                'g',
                'h',
                'i',
                'j',
                'k',
                'l',
                'm',
                'n',
                'o',
                'p',
                'r',
                's',
                't',
                'u',
                'v',
                'x',
                'y',
                'z'
            ),
            "latin_high" => array(
                'A',
                'B',
                'C',
                'D',
                'E',
                'F',
                'G',
                'H',
                'I',
                'J',
                'K',
                'L',
                'M',
                'N',
                'O',
                'P',
                'R',
                'S',
                'T',
                'U',
                'V',
                'X',
                'Y',
                'Z'
            ),
            "digit" => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0'),
            "symbol" => array("@", "%", "$", "!", "?", "-", "*")
        );
        $password = array();
        $array_integer = array(1, 2, 3, 5, 6, 8); //индексы
        foreach ($array_integer as $integ) {
            $index = rand(0, count($array_symbol['latin_low']) - 1);
            $password[$integ] = $array_symbol['latin_low'][$index];
        }

        $index_digit = rand(0, count($array_symbol['digit']) - 1);
        $password[4] = $array_symbol['digit'][$index_digit];

        $index_latin_symbol = rand(0, count($array_symbol['latin_high']) - 1);
        $password[7] = $array_symbol['latin_high'][$index_latin_symbol];

        $index_symbol = rand(0, count($array_symbol['symbol']) - 1);
        $password[9] = $array_symbol['symbol'][$index_symbol];

        ksort($password);
        return implode('', $password);
    }

    /**
     * Генерация пароля
     * @return string
     */
    static function generate_password()
    {
        $arr = array(
            'a',
            'b',
            'c',
            'd',
            'e',
            'f',
            'g',
            'h',
            'i',
            'j',
            'k',
            'm',
            'n',
            'o',
            'p',
            'r',
            's',
            't',
            'u',
            'v',
            'x',
            'y',
            'z',
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H',
            'I',
            'J',
            'K',
            'L',
            'M',
            'N',
            'O',
            'P',
            'R',
            'S',
            'T',
            'U',
            'V',
            'X',
            'Y',
            'Z',
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '0',
            ')',
            '(',
            '^',
            '@',
            '#',
            '%',
            '&'
        );
        // Генерируем пароль
        $pass = "";
        for ($i = 0; $i < 10; $i++) {
            // Вычисляем случайный индекс массива
            $index = rand(0, count($arr) - 1);
            $pass .= $arr[$index];
        }
        return $pass;
    }

    /**
     * Третий вариант генерации пароля
     * @return string
     */
    static public function generatePassword2()
    {
        $chars = "qazxswedcvfrtgbnhyujmkp23456789QAZXSWEDCVFRTGBNHYUJMKP";
        $max = 10;
        $size = strlen($chars) - 1;
        $password = '';
        while ($max--) {
            $password .= $chars[rand(0, $size)];
        }
        return $password;
    }

    // функция превода текста с кириллицы в траскрипт    
    static function transliterate($input_text)
    {
        $gost = array(
            "Є" => "YE",
            "І" => "I",
            "Ѓ" => "G",
            "і" => "i",
            "№" => "-",
            "є" => "ye",
            "ѓ" => "g",
            "А" => "A",
            "Б" => "B",
            "В" => "V",
            "Г" => "G",
            "Д" => "D",
            "Е" => "E",
            "Ё" => "YO",
            "Ж" => "ZH",
            "З" => "Z",
            "И" => "I",
            "Й" => "J",
            "К" => "K",
            "Л" => "L",
            "М" => "M",
            "Н" => "N",
            "О" => "O",
            "П" => "P",
            "Р" => "R",
            "С" => "S",
            "Т" => "T",
            "У" => "U",
            "Ф" => "F",
            "Х" => "X",
            "Ц" => "C",
            "Ч" => "CH",
            "Ш" => "SH",
            "Щ" => "SHH",
            "Ъ" => "'",
            "Ы" => "Y",
            "Ь" => "",
            "Э" => "E",
            "Ю" => "YU",
            "Я" => "YA",
            "а" => "a",
            "б" => "b",
            "в" => "v",
            "г" => "g",
            "д" => "d",
            "е" => "e",
            "ё" => "yo",
            "ж" => "zh",
            "з" => "z",
            "и" => "i",
            "й" => "j",
            "к" => "k",
            "л" => "l",
            "м" => "m",
            "н" => "n",
            "о" => "o",
            "п" => "p",
            "р" => "r",
            "с" => "s",
            "т" => "t",
            "у" => "u",
            "ф" => "f",
            "х" => "x",
            "ц" => "c",
            "ч" => "ch",
            "ш" => "sh",
            "щ" => "shh",
            "ъ" => "",
            "ы" => "y",
            "ь" => "",
            "э" => "e",
            "ю" => "yu",
            "я" => "ya",
            " " => "-",
            "—" => "-",
            "," => "-",
            "!" => "-",
            "@" => "-",
            "#" => "-",
            "$" => "",
            "%" => "",
            "^" => "",
            "&" => "",
            "*" => "",
            "(" => "",
            ")" => "",
            "+" => "",
            "=" => "",
            ";" => "",
            ":" => "-",
            "~" => "",
            "`" => "",
            "?" => "",
            "/" => "",
            "." => "-",
            "," => "-",
            "[" => "",
            "]" => "",
            "{" => "",
            "}" => "",
            "|" => ""
        );

        return strtr($input_text, $gost);
    }

    // функция превода текста с кириллицы в траскрипт для названия файлов
    static function transliterateForNameFile($input_text)
    {
        $gost = array(
            "Є" => "YE",
            "І" => "I",
            "Ѓ" => "G",
            "і" => "i",
            "№" => "-",
            "є" => "ye",
            "ѓ" => "g",
            "А" => "A",
            "Б" => "B",
            "В" => "V",
            "Г" => "G",
            "Д" => "D",
            "Е" => "E",
            "Ё" => "YO",
            "Ж" => "ZH",
            "З" => "Z",
            "И" => "I",
            "Й" => "J",
            "К" => "K",
            "Л" => "L",
            "М" => "M",
            "Н" => "N",
            "О" => "O",
            "П" => "P",
            "Р" => "R",
            "С" => "S",
            "Т" => "T",
            "У" => "U",
            "Ф" => "F",
            "Х" => "X",
            "Ц" => "C",
            "Ч" => "CH",
            "Ш" => "SH",
            "Щ" => "SHH",
            "Ъ" => "'",
            "Ы" => "Y",
            "Ь" => "",
            "Э" => "E",
            "Ю" => "YU",
            "Я" => "YA",
            "а" => "a",
            "б" => "b",
            "в" => "v",
            "г" => "g",
            "д" => "d",
            "е" => "e",
            "ё" => "yo",
            "ж" => "zh",
            "з" => "z",
            "и" => "i",
            "й" => "j",
            "к" => "k",
            "л" => "l",
            "м" => "m",
            "н" => "n",
            "о" => "o",
            "п" => "p",
            "р" => "r",
            "с" => "s",
            "т" => "t",
            "у" => "u",
            "ф" => "f",
            "х" => "x",
            "ц" => "c",
            "ч" => "ch",
            "ш" => "sh",
            "щ" => "shh",
            "ъ" => "",
            "ы" => "y",
            "ь" => "",
            "э" => "e",
            "ю" => "yu",
            "я" => "ya",
            " " => "-",
            "—" => "-",
            "," => "-",
            "!" => "-",
            "@" => "-",
            "#" => "-",
            "$" => "S",
            "%" => "",
            "^" => "-",
            "&" => "-",
            "*" => "-",
            "(" => "",
            ")" => "",
            "+" => "",
            "=" => "",
            ";" => "",
            ":" => "-",
            "~" => "",
            "`" => "",
            "?" => "",
            "/" => "",
            "," => "-",
            "[" => "",
            "]" => "",
            "{" => "",
            "}" => "",
            "|" => ""
        );

        return strtr($input_text, $gost);
    }

    static function changeRus2LatLetter($string)
    {
        $list_letter = array(
            "с" => "c",
            "у" => "y",
            "е" => "e",
            "а" => "a",
            "х" => "x",
            "р" => "p",
            "к" => "k",
            "о" => "o"
        );
        return $new_string = strtr($string, $list_letter);
    }

    static function changeLat2RusLetter($string)
    {
        $list_letter = array(
            "с" => "c",
            "у" => "y",
            "е" => "e",
            "а" => "a",
            "х" => "x",
            "р" => "p",
            "k" => "к",
            "о" => "o"
        );
        return $new_string = strtr($string, $list_letter);
    }

    // Удаляет символы не пригодные для использования в качестве ключей в БД
    static function clear_bad_char_for_key_bd($str)
    {
        $sru = 'ёйцукенгшщзхъфывапролджэячсмитьбю"';
        //$s1 содержит разрешенные символы
        $s1 = array_merge(
            GF::utf8_str_split($sru),
            GF::utf8_str_split(strtoupper($sru)),
            range('A', 'Z'),
            range('a', 'z'),
            range('0', '9'),
            array('&', ' ', '#', ';', '%', '?', ':', '(', ')', '-', '_', '=', '+', '[', ']', ',', '.', '/', '\\')
        );
        $codes = array();
        for ($i = 0; $i < count($s1); $i++) {
            $codes[] = ord($s1[$i]);
        }
        $str_s = GF::utf8_str_split($str);
        for ($i = 0; $i < count($str_s); $i++) {
            if (!in_array(ord($str_s[$i]), $codes)) {
                $str = str_replace($str_s[$i], '', $str);
            }
        }
        return $str;
    }

    // Выполнить замену первого вхождения
    function str_replace_once($search, $replace, $text)
    {
        $pos = strpos($text, $search);
        return $pos !== false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
    }

    // Разложить строку на символы
    static function utf8_str_split($str)
    {
        $split = 1;
        $array = array();
        for ($i = 0; $i < strlen($str);) {
            $value = ord($str[$i]);
            if ($value > 127) {
                if ($value >= 192 && $value <= 223) {
                    $split = 2;
                } elseif ($value >= 224 && $value <= 239) {
                    $split = 3;
                } elseif ($value >= 240 && $value <= 247) {
                    $split = 4;
                }
            } else {
                $split = 1;
            }
            $key = null;
            for ($j = 0; $j < $split; $j++, $i++) {
                $key .= $str[$i];
            }
            array_push($array, $key);
        }
        return $array;
    }

    /**
     * Получить ip адрес пользователя зашедшего на сайт
     * Если не нашло то считает его локальным
     * @return string
     */
    static function getIp()
    {
        $ip = "";
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            $ip = $_SERVER['REMOTE_ADDR'];
        } else {
            $ip = '127.0.0.1';
        }
        return $ip;
    }

    /**
     * Получить название региона
     * @return string
     */
    static function getRegionByIp()
    {
        $ip = self::getIp();
        $region = 'local';
        if ($ip !== '127.0.0.1' and strpos($ip, '192.168.') === false) {
            $url = 'http://api.2ip.ua/geo.json?ip=' . $ip;
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            $result = curl_exec($curl);
            if (!empty($result)) {
                $result_array = json_decode($result, true);
                $region = $result_array['region_rus'];
            }
            curl_close($curl);
        }
        return $region;
    }

    /**
     * Получить название страны пользователя в формате iso / UA / RU / BY / PL
     * @return string
     */
    static function getCountryByIp()
    {
        $ip = self::getIp();
        $country = 'local';
        if ($ip !== '127.0.0.1' and strpos($ip, '192.168.') === false) {
            $url = 'http://api.2ip.ua/geo.json?ip=' . $ip;
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            $result = curl_exec($curl);
            if (!empty($result)) {
                $result_array = json_decode($result, true);
                $country = $result_array['country_code'];
            }
            curl_close($curl);
        }
        return $country;
    }

    /**
     * Получить название города пользователя
     * @return string
     */
    static function getCityByIp()
    {
        $ip = self::getIp();
        $city = 'local';
        if ($ip !== '127.0.0.1' and strpos($ip, '192.168.') === false) {
            $url = 'http://api.2ip.ua/geo.json?ip=' . $ip;
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            $result = curl_exec($curl);
            if (!empty($result)) {
                $result_array = json_decode($result, true);
                $city = $result_array['country_code'];
            }
            curl_close($curl);
        }
        return $city;
    }

    static function convertMbaytToBayt($mb)
    {
        return $mb * 1024 * 1024;
    }

    static function convertBaytToMbayt($b)
    {
        return $b / 1024 / 1024;
    }

    static function getChpuText($input_text)
    {
        return strtolower(GF::transliterate($input_text));
    }

    static function getStrForSelect($arr_data, $cutted = false)
    {
        $str_data = '';
        $str_data .= ':Все;';
        foreach ($arr_data as $id => $name) {
            if ($cutted) {
                if (mb_strlen($name) > 200) {
                    $name_cutted = mb_substr($name, 0, strpos($name, ' ', 70));
                    $str_data .= $id . ':' . $name_cutted . '...' . ';';
                } else {
                    $str_data .= $id . ':' . $name . ';';
                }
            } else {
                $str_data .= $id . ':' . $name . ';';
            }
        }
        return mb_substr($str_data, 0, -1);
    }

    /**
     * Обрезать строку str по длине length и добавить ... если превышает
     * если не превышает length то оставить оригинальную строку
     * @param $str
     * @param $length
     * @param $finish_str
     * @return string
     */
    static function getTrimString($str, $length, $finish_str = '...')
    {
        return (mb_strlen($str) > $length) ? mb_substr($str, 0, $length) . $finish_str : $str;
    }

    /**
     * Представление размера файла в формате текст
     * @param int $value
     * @return string
     */
    static function convertValueSizeToStr($value)
    {
        if ($value < 1024) {
            return $value . ' байт';
        } elseif ($value > 1024 && $value < 1024 * 1024) {
            return round($value / 1024, 2) . ' кБ';
        } elseif ($value > 1024 * 1024 && $value < 1024 * 1024 * 1024) {
            return round($value / 1024 / 1024, 2) . ' МБ';
        } elseif ($value > 1024 * 1024 * 1024) {
            return round($value / 1024 / 1024 / 1024, 2) . ' ГБ';
        }
        return $value . ' байт';
    }

    // Функции работы с временем

    /**
     * date_diff - функция вычисляет разницу между двумя датами в секундах
     *
     * @param string $date1 - дата 1
     * @param string $date2 - дата 2
     *
     * @return int - разница в секундах
     *
     */
    public static function getDayBetweenDate($date1, $date2)
    {
        $diff = strtotime($date2) - strtotime($date1);
        return round(abs($diff) / 90000);
    }
}
