<?php

class Staff_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStaff()
    {
        $query = 'SELECT * FROM ' . $this->table;
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getStaffById($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = :id';
        $this->db->query($query);

        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function createDataStaff($data)
    {
        $query = 'INSERT INTO ' . $this->table . ' VALUES (:id, :name, :email, :mobile)';
        $this->db->query($query);
        $this->db->bind('id', null);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('mobile', $data['mobile']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataStaff($id)
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataStaff($data)
    {
        $query = 'UPDATE ' . $this->table . ' SET name = :name, email = :email, mobile = :mobile WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('mobile', $data['mobile']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
