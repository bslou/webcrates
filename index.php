<?php
session_start(); 
?>
<html>
  <head>
  <meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "icon" href = "https://upload.wikimedia.org/wikipedia/commons/d/df/Star_icon_1.png">
    <title>Webcrates</title>
    <style>
    .select{
      width: auto;
      height: 38px;
      display: inline;
      border-radius: 5px 0px 0px 5px;
      position: absolute;
      margin-left: -100px;
      text-align-last: center;
      background-color: #efefef
    }
    .select:hover{
      cursor: pointer;
    }
    .select:focus{
      outline: none;
      border: 2px solid orange;
    }

      .msear{
        height: 38px;
        width: 25%;
        border: 0.8px solid black;
        border-radius: none;
        padding: 5px;
        font-size: 12pt;
        border-right-style: none;
        border-left-style: none;
      }
      .msear:focus{
        outline: none;
        border: 2px solid orange;
      }
      .but{
        height: 38px;
        width: 42px;
        display: inline;
        position: absolute;
        border: 0.8px solid black;
        border-radius: 0px 5px 5px 0px;
        font-size: 12pt;
        color: transparent;  
  text-shadow: 0 0 0 black;
  background-color: #efefef
      }
      .but:hover{
        cursor: pointer;
        opacity: 0.7;
      }
      .but:focus{
        outline: none;
        border: 2px solid orange;
      }
      .getOn{
      
        border: 0.9px solid black;
        border-radius: 20px 20px 20px 20px;
        height: auto;
        width: auto;
        padding: 10px;
        font-size: 13pt;
        position: absolute;
        top: 7px;
        left: 87%;
        
        display: inline;
        color: black;
        
      }

      .getOn:hover{
        background-color: black;
        color: white;
      }
      .logOn{
        position: absolute;
        top: 7px;
        left: 94%;
        border: none;
        border-radius: none;
        height: auto;
        width: auto;
        padding: 10px;
        font-size: 13pt;

        display: inline;
        color: black;
        
      }
      .logOn:hover{
        background-color: white;
        color: black;
      }
      a{
        text-decoration: none;
      }
      .fa-search:before {
        content: "\f002";
      }
      .op{
        margin: -6px;
      }
      
      .ol{
        color: blue;

      }
      .ol:hover{
        text-decoration: underline;
      
      }
      .ol:focus{
        color: orange;
      }
      .card{
  border: 1px solid black;
  max-height: 500px;
  max-width: 400px;
  text-align: center;
  position: relative;
  margin-left: 50px;
}
.poc{
  width: 320px;
  height: 300px;
  padding: 15px;
}
.lik{
  color: blue;
}
.lik:hover{
  text-decoration: underline;
}
.lik:focus{
  color: orange;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin-left: 560px;
  position: absolute;
  top: 12%;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.row{
  height: auto;
  width: 93%;
  border: 1px solid black;
  padding: 10px;
  
}
.roc{
  height: 200px;
  width: 200px;
  margin: 20px;
}
html{
  overflow-x: hidden;
}
.jik{
  height: auto;
  width: 70%;
  border: 1px solid black;
}
.jik-pic{
  height: 200px;
  width: 230px; 
}
#myBtn {
      display: inline;
      position: relative;
      border: none;
      outline: none;
      padding: 15px;
      background-color: darkblue;
    }

    #myBtn:hover {
      opacity: 0.8;
      cursor: pointer;
    }
    hr{
      opacity:0.4;
    }
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
    </style>
  </head>
  <body>
  <div style = "display: inline;">
    <div>
    <form action = "index.php" method = "post">
    <center>
    
    <select class = "select">
    <option>
    All
    </option>
     <option>
    Blogs
    </option>
     <option>
    Directory
    </option>
    <option>
    Ecommerce
    </option>
    <option>
    Home Pages
    </option>
    <option>
    Magazines
    </option>
    
    <option>
    Portfolio
    </option>
    <option>
    Social Media
    </option>
    
    
    </select>
    <input type = "search" class = "msear" placeholder = "Search websites..." name = "search">
    <button class = "but">
    <span class="hp_icon__vpqML"><svg width="24" height="24" viewBox="0 0 24 24" fill="black"><path fill-rule="evenodd" clip-rule="evenodd" d="M11 2.5a8.5 8.5 0 105.646 14.854l4 4a.5.5 0 00.708-.708l-4-4A8.5 8.5 0 0011 2.5zM3.5 11a7.5 7.5 0 1115 0 7.5 7.5 0 01-15 0z"></path></svg></span>
    </button>
    
    
    </center>
    </form>
    
    </div>
    <a href = "index.php"><img src = "https://www.freelogoservices.com/api/main/images/1j+ojFVDOMkX9Wytexe43D6kifSDpRRGmR7NwXs1M3EMoAJtlSksjvNo8f88" alt = "Logo" style = "position:absolute; top:4px; left:5px; width:90px; height: 45px; padding: 3px;"></a>
    <a href = "join.php" class = "getOn" name = "join">Join Now</a>
    <a href = "login.php" class = "logOn">Log-in</a>
   
    </div>
    <hr>
    <center><div class = "op"><a href = "join.php" class = "ol">Buy</a> or <a href = "join.php" class = "ol">sell</a> a website</p></div></center>
    <div class = "card">
<h2 style = "font-size: 16pt; font-family: serif;">Check Out Ecommerce Websites</h1>
<a href = "filter.php"><img src = "https://cdn.pixabay.com/photo/2016/06/19/08/58/shop-1466324_1280.jpg" class = "poc" alt = "Ecommerce Website"></a><br>
<a href = "filter.php" class = "lik" style = "padding: 10px;">Check them out</a><p style = "opacity: 0; margin-top: -12px;">.</p>

</div>
<div class="slideshow-container">
<a href = "filter.php">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://get.pxhere.com/photo/content-marketing-blog-seo-web-social-media-website-traffic-online-advertisement-blogging-business-page-www-document-article-information-megaphone-font-graphic-design-icon-illustration-1569039.jpg" style="width:100%; height: 390px;">
  <div class="text">Social Media</div>
</div>
</a>
<a href = "filter.php">
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://p0.pxfuel.com/preview/545/509/245/blog-blogging-business-web.jpg" style="width:100%; height: 390px;">
  <div class="text">Blogging</div>
</div>
</a>
<a href = "filter.php">
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://cdn.pixabay.com/photo/2017/01/29/13/20/mobile-devices-2017978_1280.png" style="width:100%; height: 390px;">
  <div class="text">Portfolio</div>
</div>
</a>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center; margin-left: 480px;">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<br><br>
<center>
<div class = "row">
<h2>Cool Different Websites Available <a href = "#" class = "lik">See More &rarr;</a></h2>
<a href = "#"><img src = 'https://upload.wikimedia.org/wikipedia/commons/d/da/Internet2.jpg' class = "roc" alt = "Different websites"></a>
<a href = "#"><img src = 'https://cdn.pixabay.com/photo/2017/01/21/04/51/seo-1996405_1280.jpg' class = "roc" alt = "Different websites"></a>
<a href = "#"><img src = 'https://storage.needpix.com/rsynced_images/responsive-1622825_1280.png' class = "roc" alt = "Different websites"></a>
<a href = "#"><img src = 'https://cdn.pixabay.com/photo/2017/02/07/03/31/responsive-2044921_1280.jpg' class = "roc" alt = "Different websites"></a>
<a href = "#"><img src = 'https://svgsilh.com/svg/1985655.svg' class = "roc" alt = "Different websites"></a>
</div>
</center>
<br><br>
<center>
<div class = "jik">

<h3 style = "position: absolute; padding: 50px;">Post your website for free! &rarr;<br><a href = "#" class = "lik">Learn More</a></h3>
<a href = "#"><img src = "https://cdn.wpforms.com/wp-content/uploads/2016/10/How-to-Allow-Users-to-Submit-Blog-Posts-on-Your-WordPress-Site.png" alt = "Post Website" class = "jik-pic" style = "margin-left: 540px;"></a>
<a href = "#">
<img src = "https://forgeandsmith.com/wp-content/uploads/2019/07/successful-website-growth-strategy-1200x600.jpg" alt = "Post Website" class = "jik-pic">
</a>
</div>
<br><br>
<div class = "jik">

<h3 style = "position: absolute; padding: 50px;">Learn how payment works! &rarr;<br><a href = "#" class = "lik">Learn More</a></h3>
<a href = "#"><img src = "https://get.pxhere.com/photo/bank-app-service-finance-online-transaction-icon-smartphone-manage-technology-track-concept-invoice-smart-internet-calculator-currency-wallet-phone-budget-payment-flat-money-pay-purchase-profit-commerce-business-account-banking-ecommerce-text-product-shoulder-standing-font-communication-human-behavior-joint-logo-job-brand-conversation-organization-graphic-design-white-collar-worker-t-shirt-public-speaking-1441915.jpg" alt = "Post Website" class = "jik-pic" style = "margin-left: 540px;"></a>
<a href = "#">
<img src = "https://cdn.pixabay.com/photo/2018/05/18/16/04/payment-3411414_1280.jpg" alt = "Post Website" class = "jik-pic">
</a>
</div>
<br><br><br>
<button style = "width: 100%; height: 50px; text-align: center; font-size: 13pt; color: white;" onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>
</center><br><br><br><br>
<hr>

<center><p style = "opacity:0.4; font-size: 7pt;">&copy; Rights reserved to WebCrates Inc. 2020</p></center>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<script>
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

  </body>
</html>
