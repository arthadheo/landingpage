<?php

    if(!function_exists('checkConditionAPI')){
        function checkConditionAPI(){
            $ch = curl_init();

            $url = "http://api.zoomin.id/";
            curl_setopt($ch, CURLOPT_URL, $url );
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            else
            {
                $transaction = json_decode($result, FALSE);
                curl_close($ch);

                $object_condition = new stdClass();
                $object_condition = array(
                $transaction
                );
                // print_r($object_condition);
                return $object_condition;
            }
        }
    }

    if(!function_exists('sentConditiontoTelegram')){

        function sentConditiontoTelegram(){
            $ch = curl_init();

            $url = "https://api.telegram.org/bot548723160:AAGdvsJiiSJwTIDZa6CTcUDdaeDlSU0RzZ0/sendMessage?chat_id=241337303&text=Sorry%20Server%20is%20down%2C%20will%20be%20fixed%20soon%2E";
            curl_setopt($ch, CURLOPT_URL, $url );
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            else
            {
                $transaction = json_decode($result, FALSE);
            }      
            curl_close($ch);
            $bam = json_encode($transaction);
            print_r ($bam);
        }
    }

?>