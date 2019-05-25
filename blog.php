<!Doctype html>
<html lang="tr">
<head>
<!-- Global Site Etiketi (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GA_TRACKING_ID');
</script>    
    
<meta http-equiv="Content-Type" content="alper ergün/html" charset="utf-8"> 
<meta name="description" content="alper ergün,ALPER ERGÜN">
<meta name="keyword" content="alper ergün,ALPER ERGÜN">
<meta name="author" content="ALPER ERGÜN,alper ergün">
<title>blog</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  

.menu {background-color: #f1f1f1;width:100%; height:2em; }
ul{list-style:none;  }
ul li {display:inline-block;float:left;}

ul li a {text-decoration:none; padding:0 12px;font-size:24px;transition-duration: 1s;}
.icons a {position:relative; left:45%; padding:0 12px; font-size:15px;
    transition:all 1s ease;
}


li a:hover { font-size:34px; 
    background-color: #555;
    color: white;}
.icons a:hover { font-size:24px;background-color: #555;color:white;  }
.giris tr td input{
    background-color:#dddddd;
	colour:black;
}

.uye {  
width: 500px;
    text-align:center;
    padding: 20px;
	border:solid 1px blue;
    background-color:skyblue;
	 margin-top:100px;
  margin:auto;
  
	position: relative;
   
}
.uye form { 
    margin:auto;
  
	position: relative; }
    

.uye form input {  

    padding: 20px;
	margin-top:10 px;
    background-color:#e8c0fa;
    width: 200px;
    position: relative;
    margin:auto;
	}
	
 h1 {
    font-family: calibri; font-size:30px; 
 }	
</style>

</head>

<body>
   <div class="menu">
<ul>   
<li><a href="index.php">Anasayfa</a></li>
<li><a href="hak.php">Hakkımda</a></li>
<li><a href="galeri.php">Galeri</a></li>
<li><a href="blog.php">Blog</a></li>
<li> <a href="ilet.php">İletişim</a></li>
</ul> 
<p class="icons">
<a href="https://www.facebook.com/bayshadow"  class="fa fa-facebook"></a> 
<a href=""  class="fa fa-twitter"></a> 
<a href=""  class="fa fa-google-plus"></a> 
<a href="https://www.instagram.com/alperergun88"  class="fa fa-instagram"></a> 
</p>
</div>
<br /> 
<?php

   date_default_timezone_set('Etc/GMT-3');
echo date("d.m.Y l -- H:i:s");

   
?>
<div align="right" style="padding:0px;margin-top:0px"> 
 <form>
 <table class="giris">
 <tr><td><input type="text" name="mail" placeholder="e-posta adresinizi girin" > </td> 
 <td><input type="password" name="sifre" placeholder="şifrenizi girin" ></td>
 <td><input type="submit" value="Giriş" name="buton" style="font-weight:bold"> </td></tr>
 
 </table>
 </form>
 </div>
    <hr />
    <div class="uye">
 <div align="center"> 
<form action="uye.php" method="post" class="tablo">
       <table> <tr><td align="center"><h2>Üyelik Formu</h2></td></tr>
	   <tr><td>
<input type="text" name="ad" placeholder="adınızı girin" ><br /></td></tr>
<tr><td>
<input type="text" name="soyad" placeholder="soyadınızı girin" ></td></tr>
<tr><td>
<input type="text" name="mail" placeholder="e-posta adresinizi girin" > </td></tr>

<!– kadın<input type="radio" name="cins" value="kadın">
<!– erkek<input type="radio" name="cins" value="erkek"> 
<tr><td>
<input type="password" name="sifre" placeholder="şifrenizi girin" > </td></tr>
<tr><td>
    <tr><td></td></tr>
    <tr><td></td></tr>
 <tr><td align="center">
<input type="submit" value="Kaydol" name="buton" style="font-weight:bold;font-size:20px;background:#c6e2ff"> </td></tr>
</table>
</form>
</div>
</div>
    <form enctype="multipart/form-data" action="index.php" method="POST">
       
Profil Resmi seç:<br>
 
  <input name="message" type="file"><br>
          
  <input type="submit" value="Dosyayı URL ye Gönder">
          
</form>
<hr />



 


    
 
<tr><td>Evrak Kayıt Tarihi:</td>
    <td><input type="date" name="tarih" max="2019-12-31" min="2000-01-02"/></td></tr>    

 Arka Plan Rengi: 
 <button id="buton1">Sarı Olsun   </button>
 <button id="buton2">Mavi Olsun   </button>
 <button id="buton3">Yeşil Olsun   </button>
 <button id="buton4">Beyaz Olsun   </button>
 
 <script type="text/javascript">
     document.getElementById("buton1").addEventListener("click",function(){
         document.getElementsByTagName("body")[0].style.backgroundColor="yellow"; })
     document.getElementById("buton2").addEventListener("click",function(){
         document.getElementsByTagName("body")[0].style.backgroundColor="blue"; }) 
      document.getElementById("buton3").addEventListener("click",function(){
         document.getElementsByTagName("body")[0].style.backgroundColor="green"; }) 
     document.getElementById("buton4").addEventListener("click",function(){
         document.getElementsByTagName("body")[0].style.backgroundColor="white"; }) 
     
 </script>
 
 

    
</body>
</html>
