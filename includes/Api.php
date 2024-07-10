<?php

    namespace ClashRoyaleAPI\includes;

    class Api {

        private $token;
        private $headers;
        private $url;
        private $category;
        private $tag;
    
        public function __construct($category, $tag) {
            $this->category = $category;
            $this->tag = $tag;
            $this->url = "https://api.clashroyale.com/v1/".$this->category."/".$this->tag;
            $this->token = getenv("CRA-TOKEN");
            $this->headers = ["Accept: application/json", "Authorization: Bearer ".$this->token];
        }


        public function apiResult(){
            $curl_handle =  curl_init($this->url);
            curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $this->headers);
            curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($curl_handle);
            $data = json_decode($result,1);

            curl_close($curl_handle);

            return $data;
        }
    }
?>