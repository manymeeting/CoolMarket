<?php
class ProductForm extends DbConn
{

    public function findByMarketAndName($market_id, $product_name)
    {
        try
        {
            $db = new DbConn;
            $tbl_products = $db->tbl_products;
            // prepare sql and bind parameters
            $dbstr = "SELECT * FROM " . $tbl_products . " WHERE market_id  = :market_id AND name = :name";
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':market_id', $market_id);
            $stmt->bindParam(':name', $product_name);
            
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

    public function insertProduct($market_id, $product_name, $rating = 0)
    {
        try
        {
            $db = new DbConn;
            $tbl_products = $db->tbl_products;
            // prepare sql and bind parameters
            $dbstr = "INSERT INTO products (market_id, name, rating) VALUES (:market_id, :name, :rating)";
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':market_id', $market_id);
            $stmt->bindParam(':name', $product_name);
            $stmt->bindParam(':rating', $rating);

            
            $stmt->execute();

            $result = "";

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

    public function filterProducts($marketID, $prodctName, $allProducts)
    {
      $result = array();
      foreach ($allProducts as $product) {
        if($product["name"] === $prodctName && $product["market_id"] === $marketID)
        {
          $result = $product;
          return $result;
        }
      }
      return false;
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
