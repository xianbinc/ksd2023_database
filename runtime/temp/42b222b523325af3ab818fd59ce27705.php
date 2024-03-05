<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"/www/wwwroot/kbd.yunkew.net/public/../application/index/view/index/index.html";i:1670033662;s:67:"/www/wwwroot/kbd.yunkew.net/application/index/view/common/head.html";i:1670033557;}*/ ?>
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
    <div class="row align-items-center" style="font-size: large;">
      <p>Here, we developed the KSD (keloid sensitivity database), which is committed to a comprehensive manual curation of keloid sensitivity factor. By manually curating thousands of published literatures, multiple sensitivity regulation factors （461 biomarkers and 134 drugs）were recorded with appropriated annotation. It contains 209 drivers and 221 suppressors biomarkers, including 275 proteins, 92 RNAs, 32 genes, 27 cells, 13 pathways, and other records. We believe KSD will be a practical and user-friendly web-based tool that may serve as a specialized platform for clinicians and researchers to better understand the detailed mechanisms of keloid sensitivity.
</p>
      <a class="btn btn-primary" href="statistics.html">Go to Statistics</a>
      <br>
      <br>
      <br>
        <!-- <div class="col-lg-9"><img class="img-fluid rounded mb-4 mb-lg-0" src="/skin/picture/flowchart.jpg" alt="..." /></div> -->
    </div>
    <!-- Content Row-->
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                  <div class="col-md-2">
                    <h1><img src="/skin/images/ico01.png" width="36px"></h1>
                  </div>
                  <div class="col-md-10">
                    <h2 class="card-title">Browse</h2>
                  </div>
                    <p class="card-text">The Browse page categories all biomarker and drugs.</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="browse.html">Go to Browse</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                  <div class="col-md-2">
                    <h1><img src="/skin/images/ico02.png" width="36px"></h1>
                  </div>
                  <div class="col-md-10">
                    <h2 class="card-title">Search</h2>
                  </div>  
                    <p class="card-text">The Search page provides the ability to search by the gene name/gene ID /Symbol / Drugbank ID/Drug name.
</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="search.html">Go to Search</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
          <h4 class="card-title">Views:</h4>
          <ul class="list-group">
            <li class="list-group-item">
             <p>Web Views：<span id="view"><?php echo $views; ?></span></p>
          </li>
           
          </ul>
        </div>
    </div>
    <div class="row">
      <br>
      <br>
      <br>
    </div>
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                  <div class="col-md-2">
                    <h1><img src="/skin/images/ico03.png" width="36px"></h1>
                  </div>
                  <div class="col-md-10">
                    <h2 class="card-title">Download</h2>
                  </div>
                    <p class="card-text">All data is available for download on the Download page
</p>
                </div>
                <div class="card-footer"><a class="btn btn-primary btn-sm" href="download.html">Go to Download</a></div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="card h-100">
              <div class="card-body">
                <div class="col-md-2">
                  <h1><img src="/skin/images/ico04.png" width="36px"></h1>
                </div>
                <div class="col-md-10">
                  <h2 class="card-title">Contact us</h2>
                </div>
                  <p class="card-text">The Contact page provides information on how to contact authors of the database.
</p>
              </div>
              <div class="card-footer"><a class="btn btn-primary btn-sm" href="about.html">Go to Contact us</a></div>
          </div>
      </div>
      <div class="col-md-4 mb-5">
        <h4>Links:</h4>
        <a href="https://www.ncbi.nlm.nih.gov/" target="_blank">
          <img src="/skin/images/link01.png" alt="" style="width:100px;height:80px;">
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.uniprot.org/" target="_blank">
          <img src="/skin/picture/uniprot.png" alt="" style="width:100px;height:50px;">
        </a>
        <br>
        <a href="https://go.drugbank.com/" target="_blank">
          <img src="/skin/images/link03.png" alt="" style="width:100px;">
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://david.ncifcrf.gov/" target="_blank">
          <img src="/skin/images/link04.png" alt="" style="width:100px;">
        </a>
      </div>
    </div>
</div>
<footer class="py-5 bg-dark"></footer>
<!-- Footer-->
<!-- <footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Firefox & Chrome recommended.<br />
      &copy; All rights reserved by <a target="_blank" href="http://bis.zju.edu.cn/binfo/index.htm">Ming Chen's Lab</a>, Zhejiang University.</p>
  </div>
</footer> -->
</body> 
</html> 