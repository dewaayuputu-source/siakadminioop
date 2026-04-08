<?php
class Nilai {
    private $nilai, $sks;

    public function __construct($nilai, $sks) {
        $this->nilai = $nilai;
        $this->sks = $sks;
    }

    public function getBobot() {
        return $this->nilai * $this->sks;
    }

    public function getSKS() {
        return $this->sks;
    }
}