<?php 
 session_start();    
  ?> 
  <title>Pengaduan Masyarakat</title>
   <h1>Pengaduan Masyarakat</h1> 
    <head>   
        
        <body>
 <link rel="stylesheet" type="text/css" href="style.css"> </head> 
 <div class="kotak_login"> 
 <p class="tulisan_login">Silahkan Register</p>   
 <form action="prosesregister.php" method="post" name="form_input">    
<label for="nik">Nik</label>
 <input type="number" name="nik" class="form_login" placeholder="Masukan Nik" required> 
<label for="nama">Nama</label>  
 <input type="text" name="nama" class="form_login" placeholder="Masukan Nama">
 <label for="username">Username</label>  
 <input type="text" name="username" class="form_login" placeholder="Masukan Username">
 <label for="password">Password</label>  
 <input type="password" name="password" class="form_login" placeholder="Masukan Password">   
 <label for="notelp">No Telp</label>  
 <input type="number" name="notelp" class="form_login" placeholder="Masukan No Telp">
 <div class="tombol">
     <button type="submit" class="tombol_login">DAFTAR</button> 
     <tr></tr>
     <a href="login.php" class="btn btn-info mb-3">KEMBALI</a> 
 <br/>  
 <br/> 
</form> 
</div> 
</body>                  