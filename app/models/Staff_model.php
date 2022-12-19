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
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getStaffById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');

        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function createDataStaff($data)
    {
        $query = "INSERT INTO users VALUES (:id, :name, :email, :mobile)";
        $this->db->query($query);
        $this->db->bind('id', null);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('mobile', $data['mobile']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
