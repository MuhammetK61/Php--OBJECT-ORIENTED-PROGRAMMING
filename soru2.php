<?php
  $dizi =[50,70,3,25,85,60,1];
  
  
  /* Tanımlağımız değişkeni dizinin elemanlarını kontrol etmek için
  dizinin ilk elemanına atıyoruz.*/
  $enKucuk = $dizi[0]; 
  
  /* Dizideki tüm elemanları sıra ile geziyoruz.*/
  for($i=1; $i<count($dizi);$i++){
      /* Eğer seçilen eleman bir sonraki elemandan küçük ise o elemanı
      tutmaya devam ediyoruz. Eğer sonraki eleman küçük ise onu tutup aynı işlemi
      tekrarlıyoruz.*/
      if($enKucuk < $dizi[$i]){
          $enKucuk = $dizi[$i];
      }
  }
  echo "En küçük eleman:" .$enKucuk

?>
