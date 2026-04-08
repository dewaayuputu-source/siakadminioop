<?php
require_once "User.php";

class Mahasiswa extends User {
    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getInfo() {
        return "$this->nama ($this->nim)";
    }
}