<?php

namespace App\Models;

use App\classes\LogsClass;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\classes\CommonClass\LogClass;

class ModelBaseFunction
{

    function __construct($name_table = '')
    {
        if (!empty($name_table)) {
            $this->table = $name_table;
        }
    }

    /**
     * @param string $name_table
     */
    public function setNameTable($name_table)
    {
        $this->table = $name_table;
    }

    /**
     * @return string
     */
    public function getNameTable()
    {
        return $this->table;
    }

    /**
     * удаление всех записей по условию
     * @param $where
     * @return boolean
     */
    public function deleteWhere($where)
    {
        $sql = $this->addWhereInSql($where, DB::table($this->getNameTable()));
        $count = $sql->delete();
        return ($count > 0);
    }

    /**
     * получение одной записи
     * @param int ид записи
     * @param array|string $fields поля которые надо получить
     * @return array
     */
    public function getById($id = null, $fields = array())
    {
        if (!empty($id)) {
            $sql = DB::table($this->getNameTable());
            if (!empty($fields)) {
                $sql->select($fields);
            }
            $result = $sql->where('id', $id)->first();
            if ($result) {
                return $result;
            }
        }
        return false;
    }

    /**
     * получение одной записи в формате массива
     * @param int ид записи
     * @param array|string $fields поля которые надо получить
     * @return array
     */
    public function getByIdInArray($id = null, $fields = array())
    {
        $result = $this->getById($id, $fields);
        return $this->convertStdClassToArray($result);
    }

    /**
     * получение одной записи
     * @param array $fields - поля которые необходимо выбрать
     * @param array $where - условие выборки , ассоц массив. ключ - поле, значение - значение выборки
     * @param array $order - сортировка
     * @return array|bool
     */
    public function getItemByParams($fields = array(), $where = array(), $order = array('id', 'asc'))
    {
        $sql = DB::table($this->getNameTable());
        if (!empty($fields)) {
            $sql->select($fields);
        }
        $sql = $this->addWhereInSql($where, $sql);
        list($field, $napr) = $order;
        $sql->orderBy($field, $napr);
        $result = $sql->first();

        return ($result) ? $result : false;
    }

    /**
     * получение всех записей
     * @params String $order - указание сотрировки
     * @param array|string $fields поля которые надо получить
     * @param array $where
     * @param array|string $order
     * @return array
     */
    public function getAll($fields = array(), $where = array(), $order = array('id', 'asc'))
    {
        $sql = DB::table($this->getNameTable());
        if (!empty($fields)) {
            if (!is_array($fields)){
                $sql->select(array($fields));
            } else {
                $sql->select($fields);
            }
        }
        $sql = $this->addWhereInSql($where, $sql);
        list($field, $napr) = $order;
        $sql->orderBy($field, $napr);
        $result = $sql->get()->toArray();

        if ($result) {
            return $result;
        }
        return false;
    }

    /**
     * Получить весь список значений с БД определенного поля $name_field
     * при этом ключом возвращаемого массива является id записи
     * @param string $name_field
     * @param array $order
     * @param array $where
     * @return array
     */
    public function getAllDataFieldIdIsKey($name_field, $order = array(), $where = array())
    {
        return $this->getAllDataFieldIsKey($name_field, 'id', $order, $where);
    }

    /**
     * Получить весь список значений с БД определенного поля $name_field
     * при этом ключом возвращаемого массива является $field_key
     * @param string $name_field
     * @param $field_key
     * @param array $order
     * @param array $where
     * в формате field => значение что эквивалентно field = значение
     * например id => 6 эквивалент where id=6
     * или значение равно массивом из 3-х элементов field, условие, значение
     * например array('id', '<>', '5') эквивалентно where id<>5
     * @return array
     */
    public function getAllDataFieldIsKey($name_field, $field_key = 'id', $order = array(), $where = array())
    {
        $sql = DB::table($this->getNameTable());
        if (!empty($order)) {
            list($field, $napr) = $order;
            $sql->orderBy($field, $napr);
        } else {
            $sql->orderBy($name_field, 'asc');
        }
        $sql = $this->addWhereInSql($where, $sql);
        $result = $sql->pluck($name_field, $field_key)->toArray();
        return $result;
    }

    /**
     * получение кол-ва записей с условием выборки
     * @param Array $where  -ассоц массив, где ключ - название поля, значение массива- значение для поиска
     * @return Integer
     */
    public function getCountByWhere($where = array())
    {
        $sql = $this->addWhereInSql($where, DB::table($this->getNameTable()));
        return $sql->count();
    }

    /**
     * проверка наличия записи по указанному фильтру
     * @param Array $where - ассоц массив, где ключ - название поля, значение массива- значение для поиска
     * @return boolean
     */
    public function isItem($where = array())
    {
        return ($this->getCountByWhere($where) > 0);
    }


    /**
     * проверка наличия записи по указанному id
     * @param $id
     * @return boolean
     */
    public function isItemById($id)
    {
        $id_int = (int) $id;
        if(empty($id_int)){
            return false;
        }
        
        return $this->isItem(['id' => $id_int]);
    }

    /**
     * обновление записи по id
     * @param int $id ид записи
     * @param array $data данные для обновления
     * @return int
     */
    public function updateDataById($data, $id = null)
    {
        if (array_key_exists('id', $data)) {
            $id = $data['id'];
            unset($data['id']);
        }
        return $this->updateData($data, array('id' => $id));
    }

    /**
     * обновление записи
     * @param array $data данные для обновления
     * @return int
     */
    public function updateData($data, $where = array())
    {
        if (array_key_exists('_token', $data)) {
            unset($data['_token']);
        }
        if (!array_key_exists('updated_at', $data)) {
            $data['updated_at'] = Carbon::now();
        }
        if (array_key_exists('id', $data)) {
            $where['id'] = $data['id'];
            unset($data['id']);
        }
        $sql = $this->addWhereInSql($where, 
                DB::table($this->getNameTable())
                );
        return $sql->update($data);
    }

    /**
     * Добавить условие в sql
     * @param $where
     * @param $sql
     */
    private function addWhereInSql($where, $sql)
    {
        if (!empty($where) && is_array($where)) {
            foreach ($where as $field => $value) {
                if (is_array($value) and array_key_exists(0, $value) and array_key_exists(1, $value) and array_key_exists(2, $value)) {
                    $sql->where($value[0], $value[1], $value[2]);
                } else {
                    $sql->where($field, $value);
                }
            }
        }
        return $sql;
    }

    /**
     * Преобразовать объек stdClass в массив
     * @param $std_class
     * @return array
     */
    public function convertStdClassToArray($std_class)
    {
        $new_array = array();
        if ($std_class) {
            foreach ($std_class as $name_field => $value_field) {
                $new_array[$name_field] = $value_field;
            }
        }
        return $new_array;
    }

    /**
     * Выполнить вставку записи в БД
     * Дополнительно создает поля created_at  и updated_at если они не существуют
     * @param array $data
     * @return int id новой записи
     */
    public function insert($data)
    {
        if (array_key_exists('id', $data)) {
            unset($data['id']);
        }
        if (!array_key_exists('created_at', $data)) {
            $data['created_at'] = Carbon::now();
        }
        if (!array_key_exists('updated_at', $data)) {
            $data['updated_at'] = Carbon::now();
        }
        if (array_key_exists('_token', $data)) {
            unset($data['_token']);
        }
        return DB::table($this->getNameTable())->insertGetId($data);
    }

    /**
     * Добавить массив данных
     * @param $array_data
     */
    public function insertArray($array_data)
    {
        if (!empty($array_data)) {
            foreach ($array_data as $data) {
                $this->insert($data);
            }
        }
    }

    /**
     * удаление записи по id
     * @params Integer $id - ид удаляемой записи
     * @param string $id
     * @return boolean
     */
    public function deleteItemById($id = '')
    {
        if (!empty($id)) {
            $count = DB::table($this->getNameTable())
                ->where('id', '=', $id)->delete();
            return ($count > 0);
        }
        return false;
    }

    /**
     * удаление записи по условию
     * @param array $where
     * @return boolean
     */
    public function deleteByWhere($where)
    {
        if (!empty($where)) {
            $count = DB::table($this->getNameTable())
                ->where($where)->delete();
            return ($count > 0);
        }
        return false;
    }
}