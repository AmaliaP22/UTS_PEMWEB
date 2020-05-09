<?php
   class  Bimbel{
      var $mapel;
      var $kelas;
      var $jadwal;
      var $harga;
      
	  /* Sekumpulan Method yang ada didalam kelas buku */
      function SetHarga($parameter){
         $this->harga = $parameter;
      }
      
	  /*br adalah tag html untuk membuat garis baru */
      function GetHarga(){
         echo $this->harga ."<br/>";
      }
      function SetJadwal($parameter){
         $this->jadwal = $parameter;
      }
      
      function GetJadwal(){
         echo $this->jadwal ." <br/>";
      }
      function SetKelas($parameter){
         $this->kelas = $parameter;
      }
      
      function GetKelas(){
         echo $this->kelas ." <br/>";
      }
      function SetMapel($parameter){
         $this->mapel = $parameter;
      }
      
      function GetMapel(){
         echo $this->mapel ." <br/>";
      }
 
   }
   echo "<h1>Bimbingan Belajar</h1>";

	$Sains = new Bimbel;
	$Matematika = new Bimbel;
   $Bahasa = new Bimbel;
   $Sosial = new Bimbel;

	$Sains->setMapel( "Sains untuk SMA" );
	$Matematika->setMapel( "Matematika untuk SMA" );
   $Bahasa->setMapel( "Bahasa untuk SMA" );
   $Sosial->setMapel( "Sosial untuk SMA" );

   $Sains->setKelas( "Kelas 1" );
   $Matematika->setKelas( "Kelas 2" );
   $Bahasa->setKelas( "Kelas 3" );
   $Sosial->setKelas( "Kelas 1" );
 
   $Sains->setJadwal( 'Senin, 08.00 - 10.00' );
   $Matematika->setJadwal( 'Selasa, 09.00 - 11.00' );
   $Bahasa->setJadwal( 'Rabu, 07.00 - 09.00' );
   $Sosial->setJadwal( 'Kamis, 07.00 - 09.00' );

	$Sains->setHarga( 100000 );
	$Matematika->setHarga( 100000 );
   $Bahasa->setHarga( 100000 );
   $Sosial->setHarga( 100000 );
	
	$Sains->getMapel();
   $Sains->GetKelas();
   $Sains->GetJadwal();
	$Sains->getHarga();
	$Matematika->getMapel();
   $Matematika->GetKelas();
   $Matematika->GetJadwal();
	$Matematika->getHarga();
   $Bahasa->getMapel();
   $Bahasa->getKelas();
   $Bahasa->GetJadwal();
   $Bahasa->getHarga();
   $Sosial->getMapel();
   $Sosial->getKelas();
   $Sosial->GetJadwal();
   $Sosial->getHarga();
   echo "<br />";
   echo "<font color=’blue’> Note: Kelas yang berisi data mata pelajaran, jadwal, dan harga untuk kursus yang dapat digunakan pada web Bimbingan belajar online</font>";
?>