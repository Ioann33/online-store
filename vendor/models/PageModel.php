<?php

namespace models;

use core\AbstractModel;

class pageModel extends AbstractModel
{

    /**
     * getting data from (pages) table by content name
     * @param $namePage ('home','deliverypay','contacts')
     * @return array
     * @throws \Exception
     */
    public function showPage($namePage){
        $sql = "SELECT * FROM pages WHERE NAME LIKE '{$namePage}'; ";

        $result = $this->db->query($sql);
        if($this->db->errno !==0){
            throw new \Exception($this->db->errno);
        }
        return $result->fetch_all(MYSQLI_ASSOC) ;
    }

    /**
     * update data in (pages) table by ID and NAME property
     * @param $id
     * @param $namePage ('home','deliverypay','contacts')
     * @param $text
     * @return bool
     */
    public function updatePage($id,$namePage,$text){
        $sql="UPDATE pages SET text ='{$text}' WHERE ID = '{$id}' AND NAME = '{$namePage}';";
        return $this->db->query($sql);
    }

}