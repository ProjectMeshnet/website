<?php
// locale
$locale = "en_US"; // default locale
$domain = "messages"; // name of file with translations
if (isset($_GET['lang'])) {
    $locale = $_GET['lang'];
    setcookie('lang', $_GET['lang'], 1640995200);
}
elseif (isset($_COOKIE['lang'])) {
    $locale = $_COOKIE['lang'];
}
setlocale(LC_ALL, $locale);
putenv("LC_ALL=".$locale);
bindtextdomain($domain, "./locale");
bind_textdomain_codeset($domain,'UTF-8');
textdomain($domain);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Project Meshnet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="github.com/dansup">
    <!-- Le styles -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }
      .span8 {
        margin-bottom:30px
      }
      .logo {
        color:#2f2f2f;
      }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <ul class="nav pull-right">
              <li><a href="?lang=en_US">English</a></li>
              <li><a href="?lang=ru_RU">Русский</a></li>
            </ul>
            <a class="brand" href="./"><h1 class="logo"><img src="./img/logo.png"> Project Meshnet</h1></a>
            <div class="nav-collapse">
              <ul class="nav">
                <li class="active"><a href="./"><i class="icon-home"></i> <?=_("home")?></a></li>
<li class="divider-vertical"></li>
                <li><a href="https://wiki.projectmeshnet.org/Getting_started"><i class="icon-plus-sign"></i> <?=_("get started")?></a></li>
<li class="divider-vertical"></li>
                <li><a href="https://forums.projectmeshnet.org"><i class="icon-comment"></i> <?=_("forum")?></a></li>
<li class="divider-vertical"></li>
                <li><a href="http://map.projectmeshnet.org"><i class="icon-map-marker"></i> <?=_("map")?></a></li>
<li class="divider-vertical"></li>
                <li><a href="https://wiki.projectmeshnet.org/MeshLocal"><i class="icon-user"></i> <?=_("local")?></a></li>
<li class="divider-vertical"></li>
                <li><a href="https://wiki.projectmeshnet.org"><i class="icon-info-sign"></i> <?=_("wiki")?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row pagination-centered">
        <iframe width="853" height="480" src="https://www.youtube-nocookie.com/embed/cK73sYM3g0Q?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container">
        <div class="hero-unit">
          <h3><?=_("Our objective is to create a versatile, decentralized network built on secure protocols for routing traffic over private mesh or public internet works independent of a central supporting infrastructure.")?></h3>
          <p><a class="btn pull-right btn-large btn-inverse" href="https://wiki.projectmeshnet.org/The_Plan"><?=_("more info")?> &raquo;</a></p><br />
        </div>
        <div class="row pagination-centered">
          <div class="span3">
            <div class="well">
              <h3><?=_("Get Started")?></h3>
              <p><a class="btn btn-large" href="https://wiki.projectmeshnet.org/Getting_Started"><?=_("guide")?></a></p>
            </div>
          </div>
          <div class="span3">
            <div class="well">
              <h3><?=_("Software")?></h3>
              <p><a class="btn btn-large" href="https://github.com/cjdelisle/cjdns/">cjdns</a></p>
            </div>
          </div>
          <div class="span3">
            <div class="well">
              <h3><?=_("Hardware")?></h3>
              <p><a class="btn btn-large" href="https://wiki.projectmeshnet.org/MeshLocal"><?=_("meshlocals")?></a></p>
            </div>
          </div>
          <div class="span3">
            <div class="well">
              <h3><?=_("Discuss")?></h3>
              <p><a class="btn btn-large" href="http://chat.efnet.org:9090/?channels=%23cjdns&Login=Login"><?=_("dev chat")?></a></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="page-header">
            <h2><?=_("Current Projects")?> <small> <?=_("Project Meshnet supports and collaborates with several")?> <a href="<?=_('http://en.wikipedia.org/wiki/Free_and_open_source_software')?>">FOSS</a> <?=_("mesh related projects")?></small></h2>
          </div>
          <div class="span8">
            <h1 class="lead"><strong>Byzantium</strong> &mdash; <?=_("Ad-hoc wireless mesh networking for the zombie apocalypse. Byzantium is a live Linux distribution that delivers easy-to-use, secure, and robust mesh networking capabilities.")?></h1>          </div>
          <div class="span4 pagination-centered">
            <p><a class="btn" href="http://project-byzantium.org"><?=_("Website")?></a></p>
          </div>
          <div class="span8">
            <h1 class="lead"><strong>CJDNS</strong> &mdash; <?=_("a routing engine esigned for security, scalability, speed and ease of use.")?></h1>
          </div>
          <div class="span4 pagination-centered">
            <p><a class='btn' href='https://github.com/cjdelisle/cjdns/' > Github</a></p>
            <small><?=_("Official cjdns repo.")?></small>
          </div>
          <div class="span8">
            <h1 class="lead"><strong>ConcurrenTree</strong> &mdash; <?=_("a solution for concurrently editable rich text documents. Designed with P2P in mind, though works just as well for server-only federation.")?></h1>
          </div>
          <div class="span4 pagination-centered">
            <p><a class='btn' href='https://github.com/campadrenalin/ConcurrenTree' > Github</a></p>
            <small><?=_("Official ctree repo.")?></small>
          </div>
          <div class="span8">
            <h1 class="lead"><strong>D3NS</strong> &mdash; <?=_("the premier trust-based decentralized DNS solution.")?></h1>
          </div>
          <div class="span4 pagination-centered">
            <p><a class="btn" href="https://github.com/liamzebedee/D3NS">Github</a></p>
          </div>
          <div class="span8">
            <h1 class="lead"><strong>Free Network Foundation</strong> &mdash; <?=_("a non-profit organization that works to ensure all people have affordable access to an internet free of censorship and surveillance.")?></h1>
          </div>
          <div class="span4 pagination-centered">
            <p><a class="btn" href="http://www.freenetworkfoundation.org/"><?=_("Website")?></a></p>
          </div>
          <div class="span8">
            <h1 class="lead"><strong>Hocnet</strong> &mdash; <?=_("a concept for a competitively decentralized internet, solving the scaling problems of mesh networks through competitive interchangeable centralization that is not a threat to the decentralized nature of the network.")?></h1>
          </div>
          <div class="span2 pagination-centered">
            <p><a class='btn' href="https://pay.reddit.com/r/hocnet"><?=_("Sub-Reddit")?></a></p>
            <small><?=_("Official Hocnet Sub-reddit.")?></small>
          </div>
          <div class="span2 pagination-centered">
            <p><a class='btn' href="https://ezcrypt.it/Im5n#49bwyG3Q6r0yNFNX6ok8YWZg"><?=_("Concept Paper")?></a></p>
            <small><?=_("Hocnet Concept Paper.")?></small>
          </div>
          <div class="span8">
            <h1 class="lead"><strong>Hyperboria</strong> &mdash; <?=_("a decentralized network of cjdns nodes established with the principles of freedom and security at its core.")?></h1>
          </div>
          <div class="span2 pagination-centered">
            <p><a class='btn' href="https://wiki.projectmeshnet.org/Known_Hyperboria_sites"><?=_("Sites/Services")?></a></p>
            <small><?=_("Hyperboria-only sites/services.")?></small>
          </div>
          <div class="span2 pagination-centered">
            <p><a class='btn' href="http://map.hyperboria.net/"><?=_("Hyperboria Map")?></a></p>
            <small><?=_("A live look at the network.")?></small>
          </div>
      </div>
    </div>
  </body>
</html>
