<?php

namespace models;

use core\AbstractModel;

class AdminModel extends AbstractModel
{
    /**
     * get all users
     * @return array
     * @throws \Exception
     */
    public function showUsers(){
        $sql = "SELECT * FROM users ;";
        $result = $this->db->query($sql);
        if($this->db->errno !==0){
            throw new \Exception($this->db->errno);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    /**
     *  get specific user
     * @param $userId
     * @return array
     * @throws \Exception
     */
    public function showUser($userId){
        $sql="SELECT * FROM users WHERE id = '{$userId}';";
        $result = $this->db->query($sql);
        if($this->db->errno !==0){
            throw new \Exception($this->db->errno);
        }
        return $result->fetch_all(MYSQLI_ASSOC);

    }

    /**
     * add new user
     * @param $login
     * @param $email
     * @param $password
     * @return bool
     */
    public function saveUser($login,$email,$password){
        $sql="INSERT INTO users (login,email,password) VALUES('{$login}','{$email}','{$password}'); ";

        return $this->db->query($sql);
    }

    /**
     * update user
     * @param $idUser
     * @param $upLogin
     * @param $upEmail
     * @param $upPassword
     * @return bool
     */
    public function updateUser($idUser,$upLogin,$upEmail,$upPassword){
        $sql="UPDATE users SET login = '{$upLogin}',email = '{$upEmail}',password = '{$upPassword}' WHERE id = '{$idUser}';";
        return $this->db->query($sql);
    }

    /**
     * delete User
     * @param $idUser
     * @return bool
     */
    public function deleteUser($idUser){
        $sql="DELETE  FROM users WHERE id = '{$idUser}';";
        return $this->db->query($sql);
    }

    /** get user from database
     * @param string $email
     * @return mixed|void|null
     */
    public function getUserByEmail(string $email)
    {
        $sql = "SELECT * FROM `users` WHERE email = '{$email}';";
        $result = $this->db->query($sql);
        if(!$result){
            exit($this->db->error);
        }
        $temp = $result->fetch_all(MYSQLI_ASSOC);
        if($temp){
            return $temp[0];
        }else{
            return null;
        }
    }



}