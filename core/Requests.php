<?php
//Request Class
namespace Core;

class Requests {
    public function __construct() {}

    public function all() {
        // Merge POST and GET data
        $data = array_merge($_GET, $_POST);
        
        // Clean and sanitize the data
        return array_map(function($value) {
            return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
        }, $data);
    }
}