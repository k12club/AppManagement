<?php

class security {

    private function setadmin() {
        if ($_SESSION[_ss . 'levelaccess'] == 'admin') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function setuser() {
        if ($_SESSION[_ss . 'levelaccess'] == 'member') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function check($type = "member") {
        if ($type == "admin") {
            $check = $this->setadmin();
            $dir = "back";
        } else {
            $check = $this->setuser();
            $dir = "front";
        }

        if ($check == FALSE) {
            header("location:" . base_url() . "/" . $dir . "/user/login");
        }
    }

}
