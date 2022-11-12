<?php 

Class Posts {
    function get_all() {
        $DB = new Database();
        $query = "SELECT * FROM images ORDER BY id DESC LIMIT 12";
        $data = $DB->read($query);

        if(isset($data)) {
            return $data;
        }

        return false;
    }
}