<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
<meta description="alper ergün,ALPER ERGÜN"/>
<meta name="keyword" content="alper ergün,ALPER ERGÜN">
<meta name="author" content="ALPER ERGÜN,alper ergün">
<title>ALPER ERGÜN</title>
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
    
.kedi {border-radius:25px 25px 25px 25px; }
.anne {border-radius:25px 25px 25px 25px; }
.baba {border-radius:25px 25px 25px 25px; }
.kedi:hover {width:35%;border:2px solid green; transition:all 1s ease;}
.anne:hover {width:35%; border:2px solid red;transition: all 1s ease;}
.baba:hover {width:35%; border:2px solid blue; transition: all 1s ease;}
.caka {border-radius:25px 25px 25px 25px; }
.but {width:10%; height:3em; font-size:20px; background-color:turquoise;}
.but:hover {background:#008B8B;}     
@keyframes sagdanOrtaya{
			from{
				left:800px;
				}to{
					left:0px;
				}
			}
		@keyframes ortadanSola{
			from{
				left:0;
				}to{
					left:-800px;
					}
			}
.anaDiv{
			width:1000px;
			height:700px;
			border:1px solid green;
			position:relative;
			overflow:hidden;
			}
		.slide{
			width:1000px;
			height:700px;
			position:absolute;
			top:0;
			left:800px;
			}
		.slide img{
			width:100%;
			height:100%;
			}
		.ileri,.geri{
			padding:0.5em;
			background-color:#900;
			color:white;
			border-radius:50%;
			position:absolute;
			top:45%;
			opacity:0.5;
			transition:opacity 0.5s ease;
			cursor:pointer;
			}
		.ileri:hover,.geri:hover{
			opacity:1;
			}
		.ileri{
			right:0.5em;
			}
		.geri{
			left:0.5em;
			}
		.aciklama{
			position:absolute;
			bottom:0;
			left:0;
			padding:1em;
			box-sizing:border-box;
			background-color:rgba(0,0,0,0.3);
			color:white;
			width:100%;
			opacity:0;
			transition:opacity 0.7s ease;
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
<div><h1> ALPER ERGÜN </h1> </div>

<img class="kedi" src="kedi.jpg" width="25%" />
<img class="anne" src="anne.JPG" width="25%" /> 
<img class="baba" src="babaa.jpg" width="25%" />  <br />
<img class="caka" src="caka.jpg" width="40%" /> </div> <br />
<div class="anaDiv">
    	<div class="slide">
        	<img src="cocuk.jpg" /></a>
            <div class="aciklama">1988 yılı</div>
        </div>
        <div class="slide">
        	<img src="asker.jpg" />
            <div class="aciklama">2007 - aksu / Kahramanmaraş</div>
        </div>
        <div class="slide">
        	<img src="milano.jpg" />
            <div class="aciklama">2015 - Milano/ İtalya</div>
        </div>
        <div class="slide">
        	<img src="roma.jpg" />
            <div class="aciklama">2015 - Roma, Kolezyum</div>
        </div>
        <div class="slide">
        	<img src="ist.jpg" />
            <div class="aciklama">2016 - İstanbul</div>
        </div>
        <div class="ileri">&#8658;</div>
        <div class="geri">&#8656;</div>
    </div>
    
<script type="text/javascript">
       
	   var slide=document.getElementsByClassName("slide");
	   var sayac=0;
	   var giden=null;
	   var anaDiv=document.getElementsByClassName("anaDiv")[0];
	   var zmn=setInterval(slideBaslat,2000);
	   document.getElementsByClassName("ileri")[0].onmousedown=function(){slideBaslat();}
	   document.getElementsByClassName("geri")[0].onmousedown=function(){ sayac-=2;
	   if(sayac<0){sayac=document.getElementsByClassName("slide").length-1;}
	   slideBaslat(); }
	   	anaDiv.onmouseover=function(){
			document.getElementsByClassName("aciklama")[sayac-1].style.opacity="1";
		   clearInterval(zmn);
		   }
		anaDiv.onmouseout=function(){
			document.getElementsByClassName("aciklama")[sayac-1].style.opacity="0";
			zmn=setInterval(slideBaslat,2000);
			
			}

	   
	   
	   slideBaslat();
	   
	   
		function slideBaslat(){  
		if(sayac==5){sayac=0;} 
       	if(giden!=null){
			slide[giden].style.animation="ortadanSola 1s ease";
			slide[giden].style.left="1000px";
			}
	   slide[sayac].style.animation="sagdanOrtaya 1s ease";
	   slide[sayac].style.left="0px";
	   giden=sayac;
	   sayac++;
	   console.log(sayac);
	   
		}
	   
       </script>


</body>
</html>
