<?php

require "template.php"; 


    if(isset($_GET["id"])){    
        if( hapusData($_GET ["id"]) > 0 ) {     
              echo "
                 <script>
                       Swal.fire({ 
                          title: 'BERHASIL',
                          text: 'Data Telah dihapus',
                          icon: 'success', buttons: [false, 'OK'], 
                          }).then(function() { 
                              window.location.href='index.php'; 
                          });  
                 </script>
            ";
            
           }
           
           else {
           echo "
                <script> 
                   Swal.fire({ 
                      title: 'OOPS', 
                      text: 'Data gagal dihapus', 
                      icon: 'warning', 
                      dangerMode: true, 
                      buttons: [false, 'OK'], 
                      }).then(function() { 
                          window.location.href=''; 
                      }); 
             </script>
           ";

        }
  }

$koneksi->close();

 ?>