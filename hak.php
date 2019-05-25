<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<meta charset="utf-8" />
<meta name="description" content="alper ergün,ALPER ERGÜN">
<meta name="keyword" content="alper ergün,ALPER ERGÜN">
<meta name="author" content="ALPER ERGÜN,alper ergün">
<title>hakkımda</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.menu {background-color: #f1f1f1;width:100%; height:2em; }
ul{list-style:none;  }
ul li {display:inline-block;float:left;}

ul li a {text-decoration:none; padding:0 12px;font-size:24px;transition-duration: 1s;}
.icons a {position:relative; left:45%; padding:0 12px;font-size:15px;}


li a:hover { font-size:34px; 
    background-color: #555;
    color: white;}
.icons a:hover { font-size:24px;background-color: #555;color:white; transition:all 1s ease; } 
.but{width:7%;height:2em;font-size:20px;} 
 .but:hover {background-color:#66FFFF;}
 p {font-size:18px;    }
.zaman {font-size:24px;}
</style>

</head><body>
    
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
<p>Merhaba, kişisel web sayfama hoşgeldiniz.</p>

<p>Sayfalar arasında gezinirken beni daha iyi tanıma fırsatı bulabilirsiniz. </p>

<p>Kendimden kısaca bahsedecek olursam, Ankara' da doğdum.İlk, orta, lise ve üniversite' yi Ankara' da okudum. Önemli bir kamu kurumunda 2010 yılından beri çalışmaktayım. </p>

<p>Doğayı, hayvanları, şiiri ve gezmeyi çok seviyorum.</p>


<h2 id="alp"><i>alper ergün</i></h2>


<div class="zaman">
<?php

 date_default_timezone_set('Etc/GMT-3');

setlocale (LC_TIME,'tr-TR','tr','turkish');
echo strftime("%d.%m.%Y %A"); echo "&nbsp;&nbsp";
echo date("H:i:s");   
?>
</div>

</body>
</html>
