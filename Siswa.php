<?php
 class Siswa{
  public $nama;
  public $id;
  public $kelas;
  public $telp;
 
 public function __construct($a){
  $this->nama = "Amalia Putri";
  $this->id = $a;
  $this->kelas = "12 IPA";
  $this->telp = "08888888";
 }
 
 public function data_nama(){
  return $this->nama;  
 }
 
 public function data_kelas(){
  return $this->kelas;  
 }

 public function data_telp(){
  return $this->telp;  
 } 
 
 }
?>