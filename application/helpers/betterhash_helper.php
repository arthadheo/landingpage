<?php

    if(!function_exists('better_crypt')){
            function better_crypt($input, $rounds = 10){
                $salt = "";
                $salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));
                for($i=0; $i < 22; $i++) {
                $salt .= $salt_chars[array_rand($salt_chars)];
                }
                return crypt($input, sprintf('$2a$%02d$', $rounds) . $salt);
            }
            
            // $password = 'amaama123';
            // $hash = better_crypt($password);
            // echo $hash;

            // if(crypt($password, $hash) == $hash) {
            //     echo 'true';
            // }
    }
    
    if(!function_exists('format_date')){
        function format_date($string){
            $a = new DateTime($string);
            return $a->format('Y-m-d H:i:s');
        }
        
    }
    
?>