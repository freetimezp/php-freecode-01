<?php 

Class User {
    function login($POST) {
        $DB = new Database();
        $arr = [];
        $_SESSION['error'] = "";

        if(isset($POST['username']) && isset($POST['password'])) {
            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];

            $query = "SELECT * FROM users WHERE username = :username && password = :password LIMIT 1";
            $data = $DB->read($query, $arr);

            if(is_array($data)) {
                //show($data);
                //logged in
                $_SESSION['username'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                header("Location:" . ROOT . "home");
                die;
            }else{
                $_SESSION['error'] = "Wrong username or password!";
            }
        }else{
            $_SESSION['error'] = "Please, enter a valid username and password!";
        }
    }

    function signup($POST) {
        $DB = new Database();
        $arr = [];
        $_SESSION['error'] = "";

        if(isset($POST['username']) && isset($POST['password'])) {
            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];
            $arr['email'] = $POST['email'];
            $arr['url_address'] = get_random_string_max(60);
            $arr['date'] = date("Y-m-d H:i:s");

            $query = "INSERT INTO users (username, password, email, url_address, date) 
                VALUES (:username, :password, :email, :url_address, :date)";
            $data = $DB->write($query, $arr);

            if($data) {
                header("Location:" . ROOT . "login");
                die;
            }
        }else{
            $_SESSION['error'] = "Please, enter a valid username and password!";
        }
    }

    function check_logged_in() {
        $DB = new Database();

        if(isset($_SESSION['user_url'])) {
            $arr['user_url'] = $_SESSION['user_url'];

            $query = "SELECT * FROM users WHERE url_address = :user_url LIMIT 1";
            $data = $DB->read($query, $arr);

            if(is_array($data)) {
                //logged in
                $_SESSION['username'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                return true;
            }
        }

        return false;
    }

    function logout() {
        unset($_SESSION['username']);
        unset($_SESSION['user_url']);
        
        header("Location:" . ROOT . "login");
        die;
    }
}