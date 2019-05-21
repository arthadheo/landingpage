<?php

    if(!function_exists('api_zoomin')){
        function api_zoomin() {
            return 'https://dashboard-api.zoomin.id/';
            // return 'http://localhost:3131/';
        }
    } 
    
    if(!function_exists('sandbox_api_zoomin')){
        function sandbox_api_zoomin() {
            return 'https://api.zoomin.id/';
        }
    } 

    if(!function_exists('local_api_zoomin')){
        function local_api_zoomin() {
            return 'http://localhost:3131/';
        }
    } 
    
?>