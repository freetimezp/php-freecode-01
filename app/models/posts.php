<?php 

Class Posts {
    function get_all() {
        $DB = new Database();

        $page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $page_number = $page_number < 1 ? 1 : $page_number;

        $limit = 1;
        $offset = ($page_number - 1) * $limit;

        $query = "SELECT * FROM images ORDER BY id DESC LIMIT $limit OFFSET $offset";
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