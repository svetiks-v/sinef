<?php

namespace App\classes;

use App\Models\UsersModel;
use App\classes\MyClass\GF;
use Illuminate\Support\Facades\Auth;
use App\classes\UsersClass;
use App\classes\RolesClass;
use App\classes\ExecutorsClass;
use App\classes\CustomersClass;

/**
 * Класс для работы с пользователями
 */
class AuthUserClass
{

    /**
     * проверка авторизован или нет
     * @return Boolean
     */
    public static function isAuth()
    {
        return Auth::check();
    }

    /**
     * проверка авторизован ли админ
     * @return Boolean
     */
    public static function isAdmin()
    {
        return (self::getRoleId() == 1);
    }

    /**
     * проверка авторизован ли модератор
     * @return Boolean
     */
    public static function isModerator()
    {
        return (self::getRoleId() == 2);
    }

    /**
     * проверка авторизован ли Исполнитель
     * @return Boolean
     */
    public static function isExecutor()
    {
        return (self::getRoleId() == 3);
    }

    /**
     * проверка авторизован ли Заказчик
     * @return Boolean
     */
    public static function isCustomer()
    {
        return (self::getRoleId() == 4);
    }

    /**
     * проверка авторизован ли Заказчик
     * @return Boolean
     */
    public static function isMon()
    {
        return (self::getRoleId() == 5);
    }

    /**
     * получение id авторизированного
     * @return boolean
     */
    public static function getId()
    {
        if (Auth::check()) {
            return Auth::user()->id;
        }
        return false;
    }

    /**
     * получение логина авторизированного
     * @return String | false
     */
    public static function getLogin()
    {
        if (Auth::check()) {
            return Auth::user()->login;
        }
        return false;
    }

    /**
     * получение email авторизированного
     * @return String | false
     */
    public static function getEmail()
    {
        if (Auth::check()) {
            return Auth::user()->email;
        }
        return false;
    }

    /**
     * получение полного имени авторизированного
     * @return String | false
     */
    public static function getFullName()
    {
        if (Auth::check()) {

            $role_id = self::getRoleId();
            $user_class = "";
            if ($role_id == 3) {
                $user_class = new ExecutorsClass();
            }

            if ($role_id == 4) {
                $user_class = new CustomersClass();
            }

            if (empty($user_class)) {
                return self::getRoleName();
            }
            $user_id = self::getId();
            return $user_class->getFullNameById($user_id);
        }
        return false;
    }
    
    /**
     * получение краткого имени авторизированного
     * @return String | false
     */
    public static function getName()
    {
        if (Auth::check()) {

            $role_id = self::getRoleId();
            $user_class = "";
           
            if ($role_id == 3) {
                $user_class = new ExecutorsClass();
            }

            if ($role_id == 4) {
                $user_class = new CustomersClass();
            }

            if (empty($user_class)) {
                return self::getRoleName();
            }
            $user_id = self::getId();
            return $user_class->getNameByUserId($user_id);
        }
        return false;
    }

     /**
     * получение ид роли авторизованного
     * @return Integer | false
     */
    public static function getRoleId()
    {
        if (Auth::check()) {
            return Auth::user()->role_id;
        }
        return false;
    }

    /**
     * получение названия роли авторизованного
     * @return String | false
     */
    public static function getRoleName()
    {
        if (Auth::check()) {
            $role_id = self::getRoleId();
             
            $role = (new RolesClass())->getRoleNameById($role_id);
            return ($role) ? $role : false;
        }

        return false;
    }

}