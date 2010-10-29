<?php
  $colP = $site['sport']['team']['colP'];
  $colS = $site['sport']['team']['colS'];
  $colT = $site['sport']['team']['colT'];
  $league = $site['sport']['league'];
  $team = $site['sport']['team']['name'];
  $theme = $site['theme'];
?>

  #container {
    background-image: url('<?php echo "/images/".$league."/".$team."/bg/".$theme['bg']['name'].".jpg"; ?>');
    background-color: <?php echo $theme['bg']['color']; ?>;
  }
  
  header {
    background-image: url('<?php echo "/images/".$league."/".$team."/bg/".$theme['bg']['name']."-header.jpg"; ?>');
  }
  
  header #mainAreaContainer {
    background-image: url('<?php echo "/images/".$league."/".$team."/nav/".$theme['nav']['name']."-top-area-trans.png"; ?>');
  }
  
  header #mainArea #promo {
    border: 1px solid <?php echo $colP; ?>;
  }

  header #nav {
    background-image: url('<?php echo "/images/".$league."/".$team."/nav/".$theme['nav']['name']."-main-trans.png"; ?>');
  }

  header #nav .leftFade, header #nav .leftBar, header #nav #glintContainer {
    background-image: url('<?php echo "/images/".$league."/".$team."/nav/".$theme['nav']['name']."-main-leftbar-trans.png"; ?>');
  }

  header #nav .rightFade, header #nav .rightBar {
    background-image: url('<?php echo "/images/".$league."/".$team."/nav/".$theme['nav']['name']."-main-rightbar-trans.png"; ?>');
  }

  a {
    color: <?php echo $colS; ?>;
  }