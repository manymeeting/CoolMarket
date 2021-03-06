<?php
class ReviewForm extends DbConn
{


    public function getReviewsAndMembers($product_name, $market_id)
    {
        try
        {
            $db = new DbConn;

            // prepare sql 
            $dbstr = "SELECT reviews.rating, reviews.content, reviews.title, members.firstname, members.lastname, members.homeaddr FROM reviews ".
            " LEFT JOIN members ON reviews.member_id = members.id".
            " LEFT JOIN products ON reviews.product_id = products.id".
            " WHERE products.name = :product_name AND products.market_id = :market_id";
            
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':product_name', $product_name);
            $stmt->bindParam(':market_id', $market_id);
            
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


    public function searchReview($name, $market_id)
    {
        try
        {
            $db = new DbConn;

            // prepare sql 
			$dbstrProductId = "SELECT id FROM products WHERE name = '$name' AND market_id= '$market_id'";			                    
			// get the product id
            $resultProductId = $db->conn->query($dbstrProductId);
			
			$row = $resultProductId->fetch(PDO::FETCH_ASSOC);
			
			$id = $row['id'];
			//get review
			$dbstrReview = "SELECT * FROM reviews WHERE product_id = '$id'";
			$result = $db->conn->query($dbstrReview);

            $err = '';
        }
        catch (PDOException $e)
        {
            $err = "Error: " . $e->getMessage();
            $result = null;
        }

        return $this->_ret($err, $result);   
    }


    public function insertReview($name, $market_id, $member_id, $title, $content, $rating)
    {
        try {

            

            $db = new DbConn;
            //get product id
            $dbstr = "SELECT * FROM products ".
            " WHERE name = :name AND market_id = :market_id";
            
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':market_id', $market_id);
            $stmt->execute();
            $result = $stmt->fetchAll();

            $productID = $result[0]["id"];

            // insert reviews
            $dbstr = "INSERT INTO reviews (product_id, member_id, title, content, rating) VALUES ".
            " ( :product_id, :member_id, :title, :content, :rating )";
            $stmt = $db->conn->prepare($dbstr);
            $stmt->bindParam(':product_id', $productID, PDO::PARAM_STR);
            $stmt->bindParam(':member_id', $member_id, PDO::PARAM_STR);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->bindParam(':content', $content, PDO::PARAM_STR);
            $stmt->bindParam(':rating', strval($rating), PDO::PARAM_STR);
            

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



?>
