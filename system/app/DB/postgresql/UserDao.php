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
            $result = parent::select('select tb_users.id, name, surname, email, login, password, admin from tb_users join tb_persons on tb_users.id_person=tb_persons.id;');
            
            return $result;

        } catch (\Exception $e) {

            throw new DataBaseException($e->getMessage());
        
        }

    }

    /**
     * getUsers
     * 
     * Retorna um array com os atributos do usuário, dono do id fornecido.
     * @param int
     * @return array
     */
    public function getUserById()
    {
        try {
            $result = parent::select('select tb_users.id, name, surname, email, phone, admin login, password from tb_users join tb_persons on tb_users.id_person=tb_persons.id where tb_users.id=1;');
            
            return $result[0];

        } catch (\Exception $e) {

            throw new DataBaseException($e->getMessage());
        
        }

    }
}