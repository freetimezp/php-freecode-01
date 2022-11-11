<?php 

Class Contact extends Controller {
    function index() {
        $data['page_title'] = "Contact";
        
        $this->view("minima/contact", $data);
    }
}