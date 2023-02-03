<?php 
 session_start();    
  ?> 
  <title>Pengaduan Masyarakat</title>
   <h1>Pengaduan Masyarakat</h1> 
    <head>   
        <body>    
 <link rel="stylesheet" type="text/css" href="style.css"> </head> 
 <div class="kotak_login"> 
 <p class="tulisan_login">Silahkan login</p>   
 <form action="loginn.php" method="post" name="form_input">    
<label for="username">Username</label>
 <input type="text" name="username" class="form_login" placeholder="Masukan Username" required> 
<label for="password">Password</label>  
 <input type="password" name="password" class="form_login" placeholder="Masukan Password">   
 <div class="tombol">
     <button type="submit" class="tombol_login">MASUK</button> 
     <tr></tr>
     <a href="register.php" class="btn btn-info mb-3">BUAT AKUN</a>  
 <br/>  
 <br/> 
</form> 
</div> 
</body>                  