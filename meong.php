<?php
       include("../connect.php");
       $sql = mysql_query("SELECT * FROM download ORDER BY id DESC");
       if(mysql_num_rows($sql) > 0){
         $no = 1;
         while($data = mysql_fetch_assoc($sql)){
           echo '
           <tr bgcolor="#fff">
             <td align="center">'.$no.'</td>
             <td align="center">'.$data['tanggal_upload'].'</td>
             <td><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
             <td align="center">'.$data['tipe_file'].'</td>
             <td align="center">'.formatBytes($data['ukuran_file']).'</td>
           </tr>
           ';
           $no++;
         }
       }else{
         echo '
         <tr bgcolor="#fff">
           <td align="center" colspan="4" align="center">Tidak ada data!</td>
         </tr>
         ';
       }
       ?>
