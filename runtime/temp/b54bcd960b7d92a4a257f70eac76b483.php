<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"/www/wwwroot/kbd.yunkew.net/public/../application/index/view/index/search.html";i:1669703167;s:67:"/www/wwwroot/kbd.yunkew.net/application/index/view/common/head.html";i:1670033557;}*/ ?>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<div class="content">
    <!-- Heading Row-->

    <div class="rowbox">
      <br>
      <br>
      <br>
    </div>
    <div class="rowbox">
        <div class="col-md-3"></div>
        <div class="col-md-6 search">
            <form method="get" action="<?php echo url('search'); ?>">
                <input name="key" <?php if($key != ''): ?>value='<?php echo $key; ?>'<?php endif; ?> placeholder="Input gene name/gene ID /Symbol / Drugbank ID/Drug name" type="text" class="ant-input ant-input-lg">
                <input type="submit" class="submit" value="Query"> 
            </form>
        </div>
        <div class="col-md-3"></div>
        <div class="clear"></div>
    </div>



<div class="rowbox">
<table id="table" class="table table-striped table-bordered table-hover table-nowrap"  cellspacing="0" cellpadding="0">
<thead>
    <tr>
        <td>Biomarker</td>
        <td style="width: 100px;">Gene ID</td>
        <td>Symbol</td>
        <td>Drug</td>
        <td style="width: 150px;">DrugBank ID</td>
        <td>target</td>
        <td>journal</td>
        <td>
          <span class="ant-table-column-title">PMID</span>
          <div class="ant-table-column-sorter">
            <div class="sx">
      
           <?php if(($pid == 1) OR ($pid == '')): ?>
            <a href="<?php echo url('search',array('pid'=>0)); ?>">
             <img src="/skin/images/xia.png">
            </a>
            <?php else: ?>
            <a href="<?php echo url('search',array('pid'=>1)); ?>">
             <img src="/skin/images/shang.png">
            </a>
            <?php endif; ?>
          </div>
        </div>
        </td>
        <td>Inhibitor/Promoter</td>
        <td>ChangingTrends</td>
        <td>DetectingTechniques</td>
        <td><span class="ant-table-column-title">year</span>
          <div class="ant-table-column-sorter">
            <div class="sx">
     
            <?php if(($year == 1) OR ($year == '')): ?>
            <a href="<?php echo url('search',array('year'=>0)); ?>">
            <img src="/skin/images/xia.png">
            </a>
            <?php else: ?>
            <a href="<?php echo url('search',array('year'=>1)); ?>">
             <img src="/skin/images/shang.png">
            </a>
            <?php endif; ?>
          </div>
        </div>
        </td>
    </tr>
</thead>
<tbody>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
        <td><a href="<?php echo $vo['url']; ?>"><?php echo $vo['biomarker']; ?></a></td>
        <td><?php echo $vo['geneid']; ?></td>
        <td><?php echo $vo['symbol']; ?></td>
        <td><?php echo $vo['drug']; ?></td>
        <td><?php echo $vo['drugbank']; ?></td>
        <td><?php echo $vo['target']; ?></td>
        <td><?php echo $vo['journal']; ?></td>
        <td><?php echo $vo['pmid']; ?></td>
        <td><?php echo $vo['suppressor']; ?></td>
        <td><?php echo $vo['expression']; ?></td>
        <td><?php echo $vo['detecting']; ?></td>
        <td><?php echo $vo['year']; ?>
          
        </td>

    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>

</tbody>

</table>

<div class="pages">
    <?php echo $list->render(); ?>
</div>

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