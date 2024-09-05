<?php

namespace App\DB\postgresql;

use App\Models\User;
use App\Exception\DataBaseException;

class UserDao extends Conect {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * getUsers
     * 
     * Retorna um array de Users, com os usuários cadastrados no banco.
     * @param void
     * @return array
     */
    public function getUsers()
    {
        try {
            $result = parent::select('SELECT * FROM tb_users');
            
            return $result;

        } catch (\Exception $e) {

            throw new DataBaseException($e->getMessage());
        
        }

    }
}