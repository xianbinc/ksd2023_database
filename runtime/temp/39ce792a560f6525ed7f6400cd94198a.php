<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"/www/wwwroot/kbd.yunkew.net/public/../application/index/view/index/statistics.html";i:1669944410;s:67:"/www/wwwroot/kbd.yunkew.net/application/index/view/common/head.html";i:1670033557;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlentities($site['name']); ?></title>
    <link rel="stylesheet" href="/skin/css/bootstrap.min.css">
    <script src="/skin/js/jquery.min.js"></script>
    <script src="/skin/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/skin/css/all.css" crossorigin="anonymous">

    <!-- <script src="/skin/js/jquery-3.5.1.slim.min.js"></script> -->
    <script src="/skin/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="/skin/css/jquery.datatables.css">
    <script type="text/javascript" charset="utf8" src="/skin/js/jquery.datatables.js"></script>

    <script type="text/javascript" src="/skin/js/pace.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/skin/css/pace-theme-flash.css">
    <link rel="stylesheet" type="text/css" href="/skin/css/lbd.css">
    <script src="/skin/js/lbd.js"></script>
</head>

<style type="text/css">
.pace .pace-progress {
  background: #1E92FB; /*进度条颜色*/
  height: 3px;
}
.pace .pace-progress-inner {
  box-shadow: 0 0 10px #1E92FB, 0 0 5px     #1E92FB; /*阴影颜色*/
}
.pace .pace-activity {
  border-top-color: #1E92FB;    /*上边框颜色*/
  border-left-color: #1E92FB;    /*左边框颜色*/
}

#navbar a{
  color: #FAFAFA;
}
div {
  text-align: justify;
}
</style>

<body>
  <!--Navigator-->
  <nav class="navbar navbar-inverse navbar-static-top bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">Welcome to KSD</a>
  
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <ul class="nav navbar-nav navbar-right collapse navbar-collapse">

        <li <?php if($channel == 'index'): ?>class="active"<?php endif; ?>><a href="/">Home</a></li>
        <li <?php if($channel == 'browse'): ?>class="active"<?php endif; ?>> <a href="browse.html">Browse </a></li>
        <li <?php if($channel == 'search'): ?>class="active"<?php endif; ?>><a href="search.html">Search</a></li>
        <li <?php if($channel == 'statistics'): ?>class="active"<?php endif; ?>><a href="statistics.html">Statistics</a></li>
        <li <?php if($channel == 'download'): ?>class="active"<?php endif; ?>><a href="download.html">Download</a></li>
        <li <?php if($channel == 'about'): ?>class="active"<?php endif; ?>><a href="about.html">Contact us</a></li>
      </ul>
    </div>
  </nav>
<!-- Page Content-->
<div class="container">
    <!-- Heading Row-->

    <div class="row">
      <br>
      <br>
      <br>
    </div>
    <div class="row statistics">
        <div class="col-md-3 tc"><img src="/skin/images/simg1.png"></div>
        <div class="col-md-3 tc"><img src="/skin/images/simg2.png"></div>
        <div class="col-md-3 tc"><img src="/skin/images/simg3.png"></div>
        <div class="col-md-3 tc"><img src="/skin/images/simg4.png"></div>
        </div>
        
         <div class="row statistics">
      <br>
      <div class="col-md-6 tc"><img src="/skin/images/simg5.png"></div>
      <div class="col-md-6 tc"><img src="/skin/images/simg6.png"></div>  
      <br>
      <br>
    </div>


</div>
<!-- Footer-->
<!-- <footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Firefox & Chrome recommended.<br />
      &copy; All rights reserved by <a target="_blank" href="http://bis.zju.edu.cn/binfo/index.htm">Ming Chen's Lab</a>, Zhejiang University.</p>
  </div>
</footer> -->
</body> 
</html> 