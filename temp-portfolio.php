<!doctype html>
<html lang="en" class="no-js">
<head>
  
  <?php
    require 'clients.php';
  ?>
  
  <meta charset="utf-8">
  <!--[if IE]><![endif]-->

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
  <link rel="shortcut icon" href="/favicon.ico">
  <!--  <link rel="apple-touch-icon" href="/apple-touch-icon.png">-->
  <link rel="stylesheet" href="css/reset.css?v=1">
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=1">

  <link href="css/temp-portfolio.css" rel="stylesheet" type="text/css" />

</head>
  <!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
  <!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
  <!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
  <!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

  <div id="container">
    <header>
    </header>
    
    <div id="main">
      <a href="/" class="logo"></a>
      <?php foreach( $clients as $class => $client ) { ?>
      <div id="<?php echo $class; ?>" class="client">
        <h2><?php echo $client['name']; ?></h2>
        <h4><?php echo $client['subtitle']; ?></h4>
        <p class="main"><?php echo $client['desc']; ?></p>
        <a href="#" class="show <?php echo $class; ?>">Show Projects <span>▼</span></a>
        <div class="projects <?php echo $class; ?>">
          <?php foreach( $client['projects'] as $project ) { ?>
          <hr>
          <table class="project">
            <tr>
              <td>
                <div class="image">
                  <img src="<?php echo $project['image']; ?>" />
                </div>
              </td>
              <td class="info">
                <h3><?php echo $project['name']; ?></h3>
                <p><?php echo $project['desc']; ?></p>
                <div class="skills clearfix">
                  <?php foreach( $project['skills'] as $skill ) { ?>
                    <span class="skill"><?php echo $skill; ?></span>
                  <?php } ?>
                </div>
                <?php
                  if( @$project['link'] ) {
                    echo '<a href="'.$project['link']['url'].'" class="sample" target="_blank">'.$project['link']['text'].' <span>►</span></a>';
                  }
                ?>
              </td>
            </tr>
          </table>
          <?php } ?>
        </div>
      </div>
      <hr>
      <?php } ?>
    </div>
    
    <div id="lightbox">
      <div class="bg"></div>
      <div class="inside">
        poop
      </div>
    </div>

    <footer>
    </footer>
  </div> <!-- end of #container -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="js/jquery-1.4.2.min.js"><\/script>')</script>
  <script src="js/plugins.js?v=1"></script>
  <script src="js/script.js?v=1"></script>

  <!--[if lt IE 7]>
  <script src="/js/dd_belatedpng.js?v=1"></script>
  <![endif]-->

  <!-- <script src="/js/profiling/yahoo-profiling.min.js?v=1"></script>
  <script src="/js/profiling/config.js?v=1"></script> -->


</body>
</html>