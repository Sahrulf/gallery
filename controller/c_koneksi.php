<?php

class c_conn {
    public function conn () {
        $conn = mysqli_connect("localhost", "root", "", "facebook");
        return $conn;
    }
}