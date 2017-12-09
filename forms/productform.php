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

	public function updateRating($market_id, $product_name) 
	{
		try
        {

            $db = new DbConn;
            // get product
            $dbstr = "SELECT * FROM products WHERE market_id = :market_id AND name = :product_name";
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':market_id', $market_id);
            $stmt->bindParam(':product_name', $product_name);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $product_id = $result[0]["id"];

            // calculate rating
            $dbstr = "SELECT AVG(rating) AS avg FROM reviews WHERE product_id = :product_id";
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':product_id', $product_id);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $avg = $result[0]["avg"];

			// update rating
            $dbstr = "UPDATE products SET rating = :rating WHERE id = :product_id";
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':rating', $avg);
            $stmt->bindParam(':product_id', $product_id);
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
