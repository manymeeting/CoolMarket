<?php
class ProductsCURLer
{
    $this->url = ""; // Host name
    public function setURL($url)
    {
        $this->url = $url;
    }

    public function fetchProducts()
    {

        $post_data = array ();

        $cu = curl_init();
        curl_setopt($cu, CURLOPT_URL, $url_local);
        curl_setopt($cu, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($cu, CURLOPT_POST, 1);
        curl_setopt($cu, CURLOPT_POSTFIELDS, $post_data);

        return $this->_ret($err, $result);   
    }

}
