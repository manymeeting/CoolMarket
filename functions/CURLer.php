<?php
class CURLer
{
    public $url = ""; // Host name
    public function setURL($url)
    {
        $this->url = $url;
    }

    public function fetchData()
    {

        $post_data = array ();
        $cu = curl_init();
        curl_setopt($cu, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($cu, CURLOPT_POST, 1);
        curl_setopt($cu, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($cu, CURLOPT_URL, $this->url);
        $response = curl_exec($cu);
        curl_close($cu);
        return $response;   
    }

}
