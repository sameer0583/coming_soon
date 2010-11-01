<!doctype html>
<html lang="en" class="no-js">
<head>
  
  <?php
    $clients = array(
      'jets' => array(
        'name' => 'New York Jets',
        'desc' => 'When VaynerMedia was working with the Jets, I did a wide array of social media projects ranging from giveaway microsites to designs for in-stadium signage.  They had a strict style guide that I had to adhere to and in working with them, there were many iterative processes along the way.',
        'projects' => array(
          array(
            'name' => 'In-Stadium Signage',
            'image' => '/images/portfolio/jets-1.jpg',
            'desc' => 'When the Jets moved to the New Meadowlands, they wanted to add social media to their in-stadium signage.  With various sized pylons and ad spaces around the stadium, it was my job to design the social media ads for Facebook and Twitter.',
            'skills' => array('photoshop','illustrator'),
            'link' => array(
              'url' => '/preview.php?image=/images/preview/jets-1.jpg',
              'text' => 'sample image'
            )
          ),
          array(
            'name' => 'Jets Connect',
            'image' => '/images/portfolio/jets-2.jpg',
            'desc' => 'Conceptually a really cool project where the Jets gave away various items weekly.  In order to enter you would have to fill out the form and follow the Jets and various Jets Players.  I was in charge of the overall and weekly design elements.',
            'skills' => array('photoshop'),
            'link' => array(
              'url' => '/preview.php?image=/images/preview/jets-2.jpg',
              'text' => 'sample image'
            )
          ),
          array(
            'name' => 'MotoPic',
            'image' => '/images/portfolio/jets-3.jpg',
            'desc' => 'A highly social promotion sponsored by Motorola which involved Facebook users uploading photos to the Jets\' Facebook album through a microsite to win tickets. Apart from the design, I did a majority of the markup and pair programmed with the developer on the project.',
            'skills' => array('photoshop', 'illustrator', 'php', 'fbml', 'facebook graph', 'html', 'css'),
            'link' => array(
              'url' => 'http://www.facebook.com/Jets?v=app_152295358120613',
              'text' => 'facebook tab'
            )
          ),
          array(
            'name' => 'Hard Knocks',
            'image' => '/images/portfolio/jets-4.jpg',
            'desc' => 'A Facebook Promotion based on the HBO show Hard Knocks featuring the Jets.  After watching the show, users would answer a question to win prizes.  I did the majority of the coding and all of the overall / weekly design for this project.',
            'skills' => array('photoshop', 'illustrator', 'php', 'fbml', 'html', 'css'),
            'link' => array(
              'url' => '/preview.php?image=/images/preview/jets-4.jpg',
              'text' => 'sample image'
            )
          )
        )
      )
    );
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
      <?php foreach( $clients as $class => $client ) { ?>
      <div id="<?php echo $class; ?>" class="client">
        <h2><?php echo $client['name']; ?></h2>
        <p class="main"><?php echo $client['desc']; ?></p>
        <div class="projects">
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
                <div class="skills">
                  <?php foreach( $project['skills'] as $skill ) { ?>
                    <span class="skill"><?php echo $skill; ?></span>
                  <?php } ?>
                </div>
                <p><?php echo $project['desc']; ?></p>
                <?php
                  if( @$project['link'] ) {
                    echo '<a href="'.$project['link']['url'].'" class="sample" >'.$project['link']['text'].' <span>»</span></a>';
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