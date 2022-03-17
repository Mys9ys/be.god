<?php

namespace classes;

use Exception;

class Model
{

    protected $bd;

    protected function connect()
    {
        $this->bd = @new \mysqli(HOST, USER, PASS, DB_NAME);

        if ($this->bd->connect_error) {
            throw new Exception('Ошибка подключения к базе данных: '
                . $this->bd->connect_errno . ' ' . $this->bd->connect_error);
        }

        var_dump($this->bd);

        $res = $this->bd->query('SET NAMES UTF8');

    }

    public function getConnect(){
        return $this->connect();
    }

    final public function query($query, $crud = 'r', $return_id = false)
    {

        $result = $this->bd->query($query);

        if ($this->bd->affected_rows === -1) {
            throw new Exception('Ошибка в SQL запросе: '
                . $query . $this->bd->errno . ' ' . $this->bd->error
            );
        }

        switch ($crud) {
            case 'r':
                if ($result->num_rows) {
                    $res = [];

                    for ($i = 0; $i < $result->num_rows; $i++) {
                        $res[] = $result->fetch_assoc();
                    }

                    return $res;
                }

                return false;

                break;

            case 'c':
                if ($return_id) return $this->bd->insert_id;

                return true;

                break;

            default:

                return true;

                break;
        }

    }


    final public function showTables(){

        $query = 'SHOW TABLES';

        $tables = $this->query($query);

        $table_arr = [];

        if($tables){

            foreach ($tables as $table){

                $table_arr[] = reset($table);

            }
        }

        return $table_arr;
    }

}