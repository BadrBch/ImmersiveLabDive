<?php
session_start();
$config = json_decode(file_get_contents("_config.json"), true);
$title = $config["title"];

$lang = $_GET["lang"] ?? null;
if (!$lang) {
  $lang = $_SESSION["lang"] ?? null;
  if (!$lang) {
    $lang = "fr";
  }
} else {
  $_SESSION["lang"] = $lang;
}
if ($lang == "fr")
  $about = json_decode(file_get_contents("_about.json"), true);
else
  $about = json_decode(file_get_contents("_about_en.json"), true);
if (isset($about["title"]) && $about["title"])
  $title = $about["title"];

if (!isset($index))
  $index = null;

if (!$index && $config["background_image"] == "light") {
  $config["logo-inverse"] = $config["logo"];
  $config["_logo-inverse"] = $config["_logo"];
}

?><!DOCTYPE html>
<html class="wide" lang="en">

<head>
  <title><?php echo ($config["index"] == $index ? $index : $config["index"] . "- $index"); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Barlow%7CBarlow+Condensed:300,400,500,600,700,900">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>
  <div class="page">
    <header class="section page-header">
      <!--RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
          data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
          data-xxl-stick-up-offset="76px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
            <span></span>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!--RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!--RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!--RD Navbar Brand-->
                <div class="rd-navbar-brand">
                  <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="logo.png"
                      alt="Devinci Immersive Lab" /><img class="brand-logo-light" src="logo.png"
                      alt="Devinci Immersive Lab" /></a>
                </div>
              </div>
              <!-- Rd Navbar Navigation-->
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item<?php if ($index == 1)
                      echo ' active'; ?>"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;"
                        href="index.php"><?php echo $config["menu_home"]; ?></a></li>
                    <li class="rd-nav-item<?php if ($index == 'about')
                      echo ' active'; ?>"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;"
                        href="about.php"><?php echo $config["menu_about"]; ?></a></li>
                    <?php if (!empty($config["menu_education"]))
                      echo '<li class="rd-nav-item' . ($index == 'education' ? ' active' : '') . '"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;" href="education.php">' . $config["menu_education"] . '</a></li>'; ?>
                    <?php if (!empty($config["menu_research"]))
                      echo '<li class="rd-nav-item' . ($index == 'research' ? ' active' : '') . '"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;" href="research.php">' . $config["menu_research"] . '</a></li>'; ?>
                    <?php if ($config["menu_speakers"])
                      echo '<li class="rd-nav-item' . ($index == 'speakers' ? ' active' : '') . '"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;" href="speakers.php">Speakers</a></li>'; ?>
                    <?php if ($config["menu_committee"])
                      echo '<li class="rd-nav-item' . ($index == 'committees' ? ' active' : '') . '"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;" href="committees.php">Committees</a></li>'; ?>
                    <?php if ($config["menu_schedule"])
                      echo '<li class="rd-nav-item' . ($index == 'schedule' ? ' active' : '') . '"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;" href="schedule.php">Schedule</a></li>'; ?>
                    <li class="rd-nav-item<?php if ($index == 'projects')
                      echo ' active'; ?>"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;"
                        href="projects.php"><?php echo $config["menu_projects"]; ?></a></li>
                    <?php if (!empty($config["menu_events"]))
                      echo '<li class="rd-nav-item' . ($index == 'events' ? ' active' : '') . '"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;" href="events.php">' . $config["menu_events"] . '</a></li>'; ?>
                    <?php if ($config["menu_sponsors"])
                      echo '<li class="rd-nav-item' . ($index == 'sponsors' ? ' active' : '') . '"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;" href="sponsors.php">Sponsors</a></li>'; ?>
                    <li class="rd-nav-item<?php if ($index == 'contact')
                      echo ' active'; ?>"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;"
                        href="contact.php"><?php echo $config["menu_contact"]; ?></a></li>
                    <?php if (file_exists('../../menu_DVRC.php'))
                      include('../../menu_DVRC.php'); ?>
                    <li class="rd-nav-item"><a class="rd-nav-link" style="text-shadow: 1px 1px 2px black;" href="?lang=<?php if ($lang == 'fr')
                      echo 'en';
                    else
                      echo 'fr'; ?>"><img src="images/<?php if ($lang == 'fr')
                          echo 'en';
                        else
                          echo 'fr'; ?>.png" alt="<?php if ($lang == 'fr')
                              echo 'en';
                            else
                              echo 'fr'; ?>" /></a></li>
                  </ul>
                </div>
              </div>
              <!-- RD Navbar Collapse-->
            </div>
          </div>
        </nav>
      </div>
    </header>