<?php

class Product_model {
    private $table = 'product';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduct() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProductById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function createProduct($data)
    {
        $query = "INSERT INTO product
                    VALUES
                    ('', :product_name, :price, :description)";
        $this->db->query($query);
        $this->db->bind('product_name', $data['product_name']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('description', $data['description']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteProduct($id)
    {
        $query = "DELETE FROM product WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateProductData($data)
    {
        $query = "UPDATE product SET
                    product_name = :product_name,
                    price = :price,
                    description = :description
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('product_name', $data['product_name']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}