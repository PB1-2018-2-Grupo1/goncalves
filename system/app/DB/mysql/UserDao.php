<?php

namespace App\DB\mysql;

use App\Models\User;
use App\Exception\DataBaseException;

class UserDao extends Conect {

    public function __construct()
    {
        parent::__construct();
    }

    public function getUsers()
    {
        try {
            $result = parent::select('SELECT * FROM tb_users');
    
            return $result[0];

        } catch (\Exception $e) {

            throw new DataBaseException($e->getMessage());
        
        }

    }
}