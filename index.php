<!-- 



          _____     _____ _   ______            _ _        _ _   
         |_   _|   |_   _| | |  ____|          | (_)      (_) |  
           | |  ___  | | | |_| |__  __  ___ __ | |_  ___   _| |_ 
           | | / __| | | | __|  __| \ \/ / '_ \| | |/ __| | | __|
          _| |_\__ \_| |_| |_| |____ >  <| |_) | | | (__ _| | |_ 
         |_____|___/_____|\__|______/_/\_\ .__/|_|_|\___(_)_|\__|
                                         | |                     
                                         |_|                                    
                __     ___                 _ _              
                \ \   / (_)___ _   _  __ _| (_)_______ _ __ 
                 \ \ / /| / __| | | |/ _` | | |_  / _ \ '__|
                  \ V / | \__ \ |_| | (_| | | |/ /  __/ |   
                   \_/  |_|___/\__,_|\__,_|_|_/___\___|_|   

                                          
 
                   
                                         
                     +-----------------------------+
                     |     Made by Cole Fortson    |
                     |       and Ethan Phelps      |
                     |  (github.com/ethanrphelps)  |
                     |      (ColeFortson.com)      |
                     +-----------------------------+                   
                                 
                              [Index]

                             
-->
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <title>IsItExplic.it Visualizer</title>
      <meta name="description" content="Find out if your favorite songs are explicit">
      <meta name="keywords" content="is this song explcit, song, explcicit">
      <link rel="shortcut icon" href="assets/img/favicon.ico">
      <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
      <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.jpg">
      <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
      <link rel="stylesheet" type="text/css" href="assets/css/custom-animations.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/lib/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
      <!-- android -->
      <meta name="mobile-web-app-capable" content="yes">
      <!-- iOS -->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="translucent-black">
      <meta name="apple-mobile-web-app-title" content="Is It Explicit?">
      <style>
         body {
         -webkit-transition: right 0.4s ease;
         -moz-transition: right 0.4s ease;
         -o-transition: right 0.4s ease;
         transition: right 0.4s ease;
         position: relative;
         right: 0;
         overflow-x: hidden;
         overflow-y: hidden;
         }
         html,
         body {
         height: 100%;
         width: 100%;
         overflow: auto;
         }
      </style>
      <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
      <script src="js/typed.js" type="text/javascript"></script>
      <script>
         document.addEventListener("DOMContentLoaded", function(){
             Typed.new(".element", {
                 stringsElement: document.getElementById('typed-strings'),
                 typeSpeed: 15,
                 backDelay: 1500,
                 loop: false,
                 
                // Get musixmatch top 10 list of songs 
                 
                strings: ["Graph or visualize any song in the IsItExplic.it Database.",
                          "Search any song to get started."]
                           
             });
         });
         
         
      </script>
   </head>
   <body id="landing-page" class="landing-page" >
      <div class="gradientBG">
      <!-- Preloader -->
      <div class="preloader-mask">
         <div class="cssload-container">
            <div class="cssload-whirlpool"></div>
         </div>
      </div>
      <header>
         <nav class="navigation navigation-header">
            <div class="container">
               <div class="navigation-brand">
                  <div class="brand-logo">
                     <a href="" class="logo"></a>
                     <a href="" class="logo logo-alt"></a>
                  </div>
               </div>
               <button class="navigation-toggle">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <div class="navigation-navbar collapsed">
                  <ul class="navigation-bar navigation-bar-left">
                     <li><a href="#" style="margin-left: 125%;">Search</a>
                     </li>
                  </ul>
                  <ul class="navigation-bar navigation-bar-right">
                     <li><a href="https://twitter.com/isitexplicit"><img border="0" alt="Twitter" src="assets/img/twitter.png" width="20" height="20"></a></li>
                     <li><a href="https://facebook.com/isitexplicit"><img border="0" alt="Facebook" src="assets/img/facebook.png" width="20" height="20"></a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <div id="hero" class="static-header window-height light-text hero-section clickthrough-version clearfix">
         <div class="overlay"></div>
         <div id="container">
            <div class="heading-block align-center centered-block" style="padding: 15% 0;">
               <div class="container">
                  <div style="position:fixed; right:0;left:0;">
                     <span class="element"></span>
                     <span id="typed" style="white-space:pre;"></span>
                  </div>
                  <div class="row" style="position:relative; top:0; bottom: 0; left: 0; right: 0; margin: auto;">
                     <form class="form form-inline form-register form-register-small" action="graph" method="get">
                        <div class="form-group">
                           <input size="30" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-control required" name="search" id="search" placeholder="Search any song to visualize!">
                        </div>
                        <div class="form-group submit-wrap">
                           <!-- <input type="hidden" name="small-form"/> -->
                           <button type="submit" class="btn btn-solid">Search</button>
                        </div>
                        <br>
                        <input type="radio" name="type" value="polarArea" style="margin-right: 10px;">Polar Area Graph <br> <input type="radio" name="type" value="bar" style="margin-right: 10px;">Bar Graph
                        <br>
                        <input type="checkbox" name="showProfanities" value="on"> Show Profane Words?
                     </form>
                  </div>
               </div>
            </div>
            <center>
               <div style="position: fixed; right:100%;" >
                  <p style="position: fixed; bottom: 4px; width:100%; text-align: center; font-size:18px">
                     <a href="https://musixmatch.com">
                     <img src="assets/img/musixmatch.png" alt="musixmatch" style="width:120px;height:27px;">
                     </a>
                     <br>
                     Made with ❤️ by <a href="https://colefortson.com" style="margin-top: 8px;">Cole Fortson<a> &amp; <a href="https://github.com/ethanrphelps" style="margin-top: 8px;">Ethan Phelps</a>
                  </p>
               </div>
            </center>
         </div>
      </div>
      <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i>
      </div>
      <!--[if lt IE 9]>
      <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js?ver=1"></script>
      <![endif]-->
      <!--[if (gte IE 9) | (!IE)]><!-->
      <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js?ver=1"></script>
      <!--<![endif]-->
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/startuply.js"></script>
   </body>
   </html>