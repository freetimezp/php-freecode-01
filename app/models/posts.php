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

    function get_one($link) {
        $DB = new Database();
        $arr = [];

        $arr['link'] = $link;
        $query = "SELECT * FROM images WHERE url_address = :link LIMIT 1";
        $data = $DB->read($query, $arr);

        if(isset($data)) {
            return $data[0];
        }

        return false;
    }
}