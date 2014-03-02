<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search results</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">    
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/responsive.css" >
    <link rel="stylesheet" href="css/style.css" >
		<script src="js/jquery.js"></script>
        <script src="js/mustache.js" ></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery-migrate-1.1.1.js"></script>
        <script src="js/superfish.js"></script>
        <script src="js/jquery.mobilemenu.js"></script>
         
        <script src="search/search.js"></script>      
      <!--[if lt IE 8]>
          <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
      <![endif]-->
  <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie.css" >
    <script src="assets/js/html5shiv.js"></script>
  <![endif]-->
</head>
<body>    
<div>
  <header>  
    <div class="container">
      <div class="row">
          <div class="span12 header-block">
              <h1 class="brand"><a href="index-1.html"><img src="img/logo.png" alt="Liberty Lawyer agency"></a></h1>
              <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" value=""  >
              </form>  
          </div>
      </div>   
   </div> 
   <div class="nav-bg">
     <div class="container">     
        <div class="row">
          <div class="span12 clearfix">
            <div class="navbar navbar_ clearfix">
              <div class="navbar-inner">                                                 
                <div class="nav-collapse nav-collapse_ collapse">
                  <ul class="nav sf-menu clearfix">
                    <li><a href="index-1.html">Home</a></li>
                    <li class="sub-menu"><a href="index-1.html">about the firm</a>
                      <ul>
                        <li><a href="#">overview</a></li>
                        <li><a href="#">meet the team</a></li>
                        <li class="sub-menu"><a href="#">how it works</a>
                        	<ul>
                              <li><a href="#">step 1</a></li>
                              <li><a href="#">step 2</a></li>
                              <li><a href="#">step 3</a></li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="index-2.html">our lawyers</a></li>
                    <li><a href="index-3.html">areas of practice</a></li>
                    <li><a href="index-4.html">contacts</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <ul class="soc-icons">
                <li class="icon1"><a href="#"></a></li>
                <li class="icon2"><a href="#"></a></li>
                <li class="icon3"><a href="#"></a></li>
                <li class="icon4"><a href="#"></a></li>
            </ul>
          </div> 
        </div> 
      </div> 
    </div>   
  </header>
      
  <!--==============================content=================================-->
  <div id="content">
    <div class="container">
      <div class="row">
          <div class="span12">
              <h3>Search result:</h3>
              <div id="search-results"></div>
          </div>
       </div> 
    </div>    
  </div> 
</div> 
    <!--==============================footer=================================-->
    <footer id="footerNavTemplate">
        <div class="container">
            <div class="row-fluid">
                <div id="displayFooterNavTemp"></div>
                <div id="footerNavTemp" style="display: none;"></div>
            </div>
        </div>
    </footer>
    <!--=============================================================================-->
    <script src="js/bootstrap.js"></script>
    <script>
        $( document ).ready(function() {
            $("#topNavTemp").load("Header.html #topNav",function(){
                var template = document.getElementById('topNav').innerHTML;
                var output = Mustache.render(template);
                $("#displayTopNavTemp").html(output);
            });

            $("#footerNavTemp").load("Footer.html #footerNav",function(){
                var template = document.getElementById('footerNav').innerHTML;
                var output = Mustache.render(template);
                $("#displayFooterNavTemp").html(output);
            });
        });
    </script>
</body>
</html>