<?php

class User extends Database
{
    private $db;
    private $table = 'users';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsers()
    {
        $this->db->query("SELECT *
                         FROM $this->table
                         ORDER BY created_at");

        $results = $this->db->resultSet();
        return $results;
    }

    public function addUser($data)
    {
        $this->db->query("INSERT INTO $this->table (first_name, last_name, profile_photo, dob, country, city, address) VALUES (:first_name, :last_name, :profile_photo, :dob, :country, :city, :address)");

        //Bind Values
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':profile_photo', $data['profile_photo']);
        $this->db->bind(':dob', $data['dob']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':address', $data['address']);


        //Execute
        if ($this->db->execute()) {
            //return true;
            return $this->db->last_insert_id();
        }

        return false;
    }


    public function addUserCardDetails($data)
    {
        $this->db->query("INSERT INTO user_cards (user_id, card_number, expiry_month, expiry_year, card_cvv, card_type) VALUES (:user_id, :card_number, :expiry_month, :expiry_year, :card_cvv, :card_type)");

        //Bind Values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':card_number', $data['card_number']);
        $this->db->bind(':expiry_month', $data['expiry_month']);
        $this->db->bind(':expiry_year', $data['expiry_year']);
        $this->db->bind(':card_cvv', $data['card_cvv']);
        $this->db->bind(':card_type', $data['card_type']);


        //Execute
        if ($this->db->execute()) {
            return true;
        }

        return false;
    }
}
