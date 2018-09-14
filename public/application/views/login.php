<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <script language='javascript'>
    var txt='Integrated Transportation System Bus DAMRI   ';
    var speed=300;
    var refresh=null;
    function action() { document.title=txt;
    txt=txt.substring(1,txt.length)+txt.charAt(0);
    refresh=setTimeout("action()",speed);}action();
    </script>
  <title> </title>
  <link rel="stylesheet" href="<?php echo base_url();?>aset/css/style.css">

	  <script type="text/javascript">
    function cekform()
    {
      if(!$("#username").val())
      {
        alert('Sorry, Username is Required!');
        $("#username").focus();
        return false;
      }

      if(!$("#password").val())
      {
        alert('Sorry, password is Required!');
        $("#password").focus();
        return false;
      }
    }
    </script>
</head>
<body>
  <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="<?php echo base_url();?>aset/images/dishub1.png" alt="Avatar" />
    </button>
	<form action="<?php echo base_url(); ?>auth/cek_login" method="POST" onsubmit="return cekform();">
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text" name="username" id="username" class="input" />
          <label for="username" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" name="password" id="password" class="input"/>
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
          <button type="submit" class="btn">Login</button>
        </div>
      </div>
      <div class="toolbar center">
        <a href="<?php echo base_url();?>" onclick="show_box('login-box'); return false;" class="back-to-login-link">
          Kembali ke halaman sebelumnya
          <i class="icon-arrow-right"></i>
        </a>
      </div>
     </div>     
	 </form>
  </div>
</div>
<script  src="<?php echo base_url();?>aset/js/index.js"></script>
</body>
</html>
