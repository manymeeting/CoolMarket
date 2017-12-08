<?php

class UserForm extends DbConn
{

    public function searchByEmail($email)
    {
        try
        {
            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $dbstr = "SELECT * FROM " . $tbl_members . " WHERE " . "email = " . ":email";
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':email', $email);
            
            $stmt->execute();
            $result = $stmt->fetchAll();

            $err = '';
        }
        catch (PDOException $e)
        {
            $err = "Error: " . $e->getMessage();
            $result = null;
        }

        return $this->_ret($err, $result);   
    }

    public function searchUser($searchBy, $searchValue)
    {
        try
        {
            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $dbstr = "SELECT * FROM " . $tbl_members . " WHERE " . $searchBy . " LIKE " . ":value";
            $stmt = $db->conn->prepare($dbstr);
            $searchValue = '%' . $searchValue . '%';
            $stmt->bindParam(':value', $searchValue);
            
            $stmt->execute();
            $result = $stmt->fetchAll();

            $err = '';
        }
        catch (PDOException $e)
        {
            $err = "Error: " . $e->getMessage();
            $result = null;
        }

        return $this->_ret($err, $result);   
    }

    public function fetchAllUser()
    {
        try
        {
            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $dbstr = "SELECT * FROM " . $tbl_members;
            $result = $db->conn->query($dbstr);

            $err = '';
        }
        catch (PDOException $e)
        {
            $err = "Error: " . $e->getMessage();
            $result = null;
        }

        return $this->_ret($err, $result);
        
    }

    public function createUser($email, $pw, $firstname, $lastname, $homephone, $homeaddr, $cellphone)
    {
        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $dbstr = "INSERT INTO " . $tbl_members . " (password, email, firstname, lastname, homephone, homeaddr, cellphone) VALUES (:password, :email, :firstname, :lastname, :homephone, :homeaddr, :cellphone)";
            
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pw);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':homephone', $homephone);
            $stmt->bindParam(':homeaddr', $homeaddr);
            $stmt->bindParam(':cellphone', $cellphone);

            $stmt->execute();

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        return $this->_ret($err, null);

    }

    private function _ret($err, $result)
    {
        //Determines returned value ('true' or error code)
        if ($err == '') {

            if(!is_null($result))
            {
                return $result;
            }

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;
    }
}
