<?php
session_start(); 
?>
<html>
  <head>
  <meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "icon" href = "https://upload.wikimedia.org/wikipedia/commons/d/df/Star_icon_1.png">
    <title>Webcrates - <?php ?></title>
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
      .msear::-webkit-search-cancel-button{
        position:relative;
        right:20px;    
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
      .rowo{
        border: 0.4px solid black;
        width: 53%;
        height: auto;
        text-align: left;
      }
      .rowo-pic{
        width: 230px;
        height: 260px;
        padding: 15px;
        display:inline; 
      
      }
      .vick{
        font-size: 18pt;

      }
      td{
        max-width: 500px;
      }
      table{
        border: 1px solid black;
      }
      .gol{
        text-decoration: none;
        color: blue;
      }
      .gol:hover{
        text-decoration: underline;
      }
      .gol:focus{
        color: orange;
      }
    </style>
  </head>
  <body>
<div style = "display: inline;">
    <div>
    <form action = "search.php" method = "post">
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
    <br>
    <!--
    <center>
    <div class = "rowo">
    <div style="white-space:nowrap; display: inline;">
    <div style = "display: inline;">
    <img src = "https://images.ctfassets.net/9ijwdiuuvngh/1OR4kblDEomuOGUYcY2UO4/8dd1bf8b1a9fbd6e968497f6c1744579/2-1___Best_Tech-Sites.png" alt = "Website" class = "rowo-pic">
    </div>
    <div style = "display:inline; white-space:nowrap; float: right; padding: 30px 101px;">
    <a href = "#" class = "vick">Some text about the product...</a>
    </div><br>
    <div style = "display:inline; white-space:nowrap;float: right;">
    <p>Website link: <a href = "#">website link</a>.</p>
    </div>
    <div>
<h3>Description: </h3>
<p></p>

    </div>
    </div>

    </div>
    <br><br><hr>
    </center>
    -->
    <center>
    <table>
<tr><td><a href = "#"><img src = "https://images.ctfassets.net/9ijwdiuuvngh/1OR4kblDEomuOGUYcY2UO4/8dd1bf8b1a9fbd6e968497f6c1744579/2-1___Best_Tech-Sites.png" alt = "Website" class = "rowo-pic"></a></td><td>
    <a href = "#" class = "vick gol">Some text about the product...</a>
 <br>

    <p>Website link: <a href = "#" class = "gol">website link</a>.</p>
<h3>Description: </h3>
<p>lorum ipsum bla d kjd kvj dkvj dkjfv kdjfv kdj fvkdj fvkldj vkd kv dkvj dkjv dkjv kdj fvkdj vkjd fvkjd fvkd vkj dkjv dkj vfkdj vkdfj vk kjbodfung isiuvhdfiuvgesv ivoisdgfoiggsd uvgseiufvkifsbvidgsi ovhbdiv hdiosvu h</p></td></tr>



    </table>
    
    </center>
    </body>
    </html>
