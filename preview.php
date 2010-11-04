<!doctype html>
<html lang="en" class="no-js">
<head>
  
  <?php
    function curPageURL() {
     $pageURL = 'http';
     $pageURL .= "://";
     if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
     } else {
      $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
     }
     return $pageURL;
    }

    $url = curPageURL();  
    $args = parse_url($url);
    parse_str($args['query']);
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

  <link href="css/preview.css" rel="stylesheet" type="text/css" />

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
      <table class="image">
        <td>
          <img src="<?php echo $image; ?>" />
        </td>
      </table>
    </div>

    <footer>
    </footer>
  </div> <!-- end of #container -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-19511860-1']);
    _gaq.push(['_setDomainName', '.sameert.com']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
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