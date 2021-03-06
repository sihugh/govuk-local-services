<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <?php if(isset($page_title) && $page_title != "") :?>
      <title><?php echo $page_title ?> - <?php echo SITE_NAME; ?> (by Dafydd Vaughan)</title>
    <?php else : ?>
      <title><?php echo SITE_NAME; ?> (by Dafydd Vaughan)</title>
    <?php endif; ?>

    <meta name="viewport"    content="width=device-width, initial-scale=1.0" />
    <meta name="keywords"    content="" />
    <meta name="description" content="" />
    <meta name="Author"      content="Dafydd Vaughan (<?php echo date('Y'); ?>), dafyddvaughan.co.uk" />
    <meta name="robots"      content="nofollow,noindex" />

    <?php if(isset($canonical)) : ?>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <?php endif;?>


    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/extras.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php if (GA_CODE != "") : ?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '<?php echo GA_CODE; ?>']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <?php endif; ?>


  </head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url(); ?>"><?php echo SITE_NAME; ?> <span>(alpha)</span></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo site_url(); ?>">Home</a></li>
              <li><a href="<?php echo site_url('about'); ?>">About</a></li>
              <li><a href="<?php echo site_url('services'); ?>">Services</a></li>
              <li><a href="<?php echo site_url('authorities'); ?>">Local Authorities</a></li>
              <!--<li><a href="<?php echo site_url('licences'); ?>">Licences</a></li>-->
              <li class="dropdown">
                <a href="<?php echo site_url('about'); ?>" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('service-urls/problem-urls'); ?>">Problem URLs</a></li>
                  <li><a href="<?php echo site_url('service-urls/update-list'); ?>">Recent URL Updates</a></li>
                  <!--<li><a href="<?php echo site_url('licences/problem-licences'); ?>">Problem Licences</a></li>-->
                  <li><a href="<?php echo site_url('check-queues'); ?>">Queue Status</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div id="page">
      <div class="container">
        <div class="alert-alpha"><strong>ALPHA</strong> - This app is under active development &amp; could be inaccurate or broken</div>
        <?php if(isset($breadcrumbs)) : ?>
          <div id="breadcrumbs">
            <ul class="breadcrumb">
              <li><a href="<?php echo site_url(); ?>">Home</a> <span class="divider">&raquo;</span></li>
              <?php $breadcrumb_total = sizeof($breadcrumbs)-1; ?>
              <?php foreach($breadcrumbs as $num=>$b) : ?>
                <?php if($num == $breadcrumb_total) : ?>
                  <li class="active"><a href="<?php echo site_url($b['link']);?>"><?php echo $b['title'];?></a></li>
                <?php else : ?>
                  <li><a href="<?php echo site_url($b['link']);?>"><?php echo $b['title'];?></a> <span class="divider">&raquo;</span></li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
