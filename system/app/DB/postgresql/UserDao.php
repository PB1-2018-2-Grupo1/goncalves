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
    public function getUserById($id)
    {
        try {
            $result = parent::select('select tb_users.id, name, surname, email, phone, admin, login, password from tb_users join tb_persons on tb_users.id_person=tb_persons.id where tb_users.id='.$id.';');
            
            return $result[0];

        } catch (\Exception $e) {

            throw new DataBaseException($e->getMessage());
        
        }

    }

    /**
     * updateUser
     * 
     * Recebi um objeto do tipo User e atualiza o banco de dados.
     * @param User
     * @return void
     */
    public function updateUser(User $user)
    {
        try {
            parent::select('CALL pr_update_user(
                :id,
                :name,
                :surname,
                :email,
                :login,
                :phone,
                :password,
                :admin
            )', [
                ':id'       => $user->getId(),
                ':name'     => $user->getName(),
                ':surname'  => $user->getSurname(),
                ':email'    => $user->getEmail(),
                ':login'    => $user->getLogin(),
                ':phone'    => $user->getPhone(),
                ':password' => $user->getPassword(), /*password_hash($user->getPassword(), PASSWORD_BCRYPT, ["cost" => 10]),*/
                ':admin'    => $user->getAdmin()                
            ]);

        } catch (\Exception $e) {

            throw new DataBaseException($e->getMessage());
        
        }

    }
}