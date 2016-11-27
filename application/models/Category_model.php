<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 10:22
 */
class Category_model extends CI_Model
{
    public function getCategory()
    {
        return $this->db->get('categories');
        //SELECT * FROM categories
    }

    public function insertCategory($name)
    {
        //INSERT INTO category (name) VALUES ($name);
        $data = array(
            'name' => $name
        );
        $this->db->insert('categories', $data);
    }

    public function getCategoryByID($category_id)
    {
        $this->db->where('category_id', $category_id);
        return $this->db->get('categories');
        // SELECT * FROM categories WHERE category_id = 1 ;
    }

    public function updateCategory($category_id,$name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->where('category_id', $category_id);
        $this->db->update('categories', $data);
    }

    public function deleteCategory($category_id)
    {
    $this->db->where('category_id', $category_id);
    $this->db->delete('categories');
    }
}