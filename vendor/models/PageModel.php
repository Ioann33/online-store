<?php

namespace models;

use core\AbstractModel;

class pageModel extends AbstractModel
{

    /**
     * getting data from (pages) table by content name
     * @param $namePage
     * @return mixed
     * @throws \Exception
     */
    public function page($namePage){
        $sql = "SELECT * FROM pages WHERE NAME LIKE '{$namePage}'; ";

        $result = $this->db->query($sql);
        if($this->db->errno !==0){
            throw new \Exception($this->db->errno);
        }
        return $result->fetch_all(MYSQLI_ASSOC) ;
    }

}