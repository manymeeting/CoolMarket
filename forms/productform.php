<?php
class ProductForm extends DbConn
{

    public function findProductBy($searchBy, $searchValue)
    {
        try
        {
            $db = new DbConn;
            $tbl_products = $db->tbl_products;
            // prepare sql and bind parameters
            $dbstr = "SELECT * FROM " . $tbl_products . " WHERE " . $searchBy . " = " . ":value";
            $stmt = $db->conn->prepare($dbstr);
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

	public function updateRating($id) 
	{
		try
        {
            $db = new DbConn;
			
			// calculate rating
            $dbstrRating = "SELECT AVG(rating) AS avg FROM reviews WHERE product_id = '$id'";
            $resultRatingObj = $db->conn->query($dbstrRating);
			
			$row = $resultRatingObj->fetch(PDO::FETCH_ASSOC);
			$resultRating = $row['avg'];
			// echo $resultRating;
			// update product rating			
			$dbstrProduct = "UPDATE products SET rating = '$resultRating' WHERE id = '$id'" ;
			$result = $db->conn->query($dbstrProduct);

            $err = '';
        }
        catch (PDOException $e)
        {
            $err = "Error: " . $e->getMessage();
            $result = null;
        }

        return $this->_ret($err, $result);
	}
	
    public function fetchAllProducts()
    {
        try
        {
            $db = new DbConn;
            // prepare sql and bind parameters
            $dbstr = "SELECT * FROM products" ;
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
?>
