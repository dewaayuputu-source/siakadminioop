<?php
class MataKuliah {
    private $kode, $nama, $sks;

    public function __construct($kode, $nama, $sks) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->sks = $sks;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getSKS() {
        return $this->sks;
    }
}