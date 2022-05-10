<?php

namespace models;

use core\AbstractModel;

class CategoryModel extends AbstractModel
{

    /**
     * get all categories
     * @return array
     * @throws \Exception
     */
    public function showCategories(){
        $sql = "SELECT * FROM categories ;";
        $result = $this->db->query($sql);
        if($this->db->errno !==0){
            throw new \Exception($this->db->errno);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     *  get products of a specific category
     * @param $categoryId
     * @return array
     * @throws \Exception
     */
    public function showCategory($categoryId){
        $sql="SELECT * FROM products WHERE category_id = '{$categoryId}';";
        $result = $this->db->query($sql);
        if($this->db->errno !==0){
            throw new \Exception($this->db->errno);
        }
        return $result->fetch_all(MYSQLI_ASSOC);

    }

    /**
     * save new category
     * @param $name
     * @return bool
     */
    public function saveCategory($name){
        $sql="INSERT INTO categories (name) VALUES('{$name}'); ";

       return $this->db->query($sql);
    }

    /**
     * update Category(name)
     * @param $id
     * @param $updateName
     * @return bool
     */
    public function updateCategory($id,$updateName){
        $sql="UPDATE categories SET name = '{$updateName}' WHERE id = '{$id}';";
        return $this->db->query($sql);
    }

    /**
     * delete Category
     * @param $id
     * @return bool
     */
    public function deleteCategory($id){
        $sql="DELETE  FROM categories WHERE id = '{$id}';";
        return $this->db->query($sql);
    }

}