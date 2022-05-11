<?php

namespace models;

use core\AbstractModel;

class ProductModel extends AbstractModel
{
    /**
     * get all products
     * @return array
     * @throws \Exception
     */
    public function showProducts(){
        $sql = "SELECT * FROM products ;";
        $result = $this->db->query($sql);
        if($this->db->errno !==0){
            throw new \Exception($this->db->errno);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * get a specific Product
     * @param $id
     * @return array
     * @throws \Exception
     */
    public function showProduct($id){
        $sql="SELECT * FROM products  WHERE id ='{$id}';";
        $result = $this->db->query($sql);
        if($this->db->errno !==0){
            throw new \Exception($this->db->errno);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * add new Product
     * @param $name
     * @param $price
     * @param $description
     * @param $photo
     * @param $categoryId
     * @return bool
     */
    public function saveProduct($name,$price,$description,$photo,$categoryId){
        $sql="INSERT INTO products (name,price,description,photo,category_id) VALUES ('{$name}','{$price}','{$description}','{$photo}','{$categoryId}');";
        return $this->db->query($sql);
    }

    /**
     * update specific Product
     * @param $name
     * @param $price
     * @param $description
     * @param $photo
     * @param $categoryId
     * @return bool
     */
    public function updateProduct($name,$price,$description,$photo,$categoryId){
        $sql="UPDATE products SET name='{$name}',price='{$price}',description = '{$description}',photo='{$photo}',category_id='{$categoryId}';";
        return $this->db->query($sql);
    }

    /**
     * delete specific Product
     * @param $id
     * @return bool
     */
    public function deleteProduct($id){
        $sql="DELETE FROM products WHERE id='{$id}';";
        return $this->db->query($sql);
    }

}