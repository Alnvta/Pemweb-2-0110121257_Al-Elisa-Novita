<?php
 $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
 $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
 $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
 $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

 $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

 ?>

<h2 class="text-center">Daftar Nilai Siswa</h3>
 <table class="table table-white table-hover">
 <thead class="table table-info">
 <tr>
 <th scope="col">No</th>
 <th scope="col">NIM</th>
 <th scope="col">UTS</th>
 <th scope="col">UAS</th>
 <th scope="col">Tugas</th>
 <th scope="col">Nilai Akhir</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor = 1;
 foreach($ar_nilai as $ns){
 echo '<tr><td>'.$nomor.'</td>';
 echo '<td>'.$ns['nim'].'</td>';
 echo '<td>'.$ns['uts'].'</td>';
 echo '<td>'.$ns['uas'].'</td>';
 echo '<td>'.$ns['tugas'].'</td>';
 $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
 echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
 echo '<tr/>';
 $nomor++;
 }
 ?>
 </tbody>
 </table>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
