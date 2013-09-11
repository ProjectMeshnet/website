<?php include '../inc/header.php'; ?>
<?php include '../inc/nav.php'; ?>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
         <li><a href="<?php echo $home; ?>">Home</a></li>
          <li><a href="https://projectmeshnet.wordpress.com">Blog</a></li>
          <li class="active"><a href="<?php echo $docs; ?>">Docs</a></li>
          <li><a href="<?php echo $donate; ?>">Donate</a></li>
          <li><a href="https://wiki.projectmeshnet.org/">Wiki</a></li>
    </ul>
<?php include '../inc/pull-right.php'; ?>
  </div>
</nav>
          <div class="jumbotron">
             <div class="container">
                <h2 class="featurette-heading">Docs</h2>
                <p class="lead">Cjdns documentation/guides.</p>
             </div>
          </div>
      <div class="container">

   <div class="body-content">
       <div class="row marketing">
        <div class="col-lg-2"></div>
         <div class="col-lg-8 well-mesh">
              <p class="text-docs">Our docs section contains a few community contributed documentation and guides that have been vetted as safe/secure by the developers of Project Meshnet and cjdns.</p>
          </div>
        </div>
       <div class="row marketing">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="page-header">
          <h1>Cjdns Installation Guides</h1>
        </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">Official guide (Debian)</p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="https://github.com/cjdelisle/cjdns#how-to-install-cjdns">Debian Guide</a></p>
          </div>
        </div>
      </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">Install on Ubuntu</p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="https://wiki.projectmeshnet.org/Install_on_Ubuntu">Ubuntu Guide</a></p>
          </div>
        </div>
      </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">Install on ArchLinux &nbsp;&nbsp;&nbsp;<small><span class="label label-default">package</span></small></p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="https://wiki.projectmeshnet.org/Install_on_ArchLinux">Arch Linux Guide</a></p>
          </div>
        </div>
      </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">Install on Gentoo &nbsp;&nbsp;&nbsp;&nbsp;<small><span class="label label-default">package</span></small></p>
           <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="https://wiki.projectmeshnet.org/Install_on_Gentoo">Gentoo Guide</a></p>
          </div>
        </div>        
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
	   <div class="panel-body">
	     <p class="lead-alt">Install on Mac OS X</p>
	     <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="https://wiki.projectmeshnet.org/Install_on_Mac_OS_X">Mac OS X Guide</a></p>
	   </div>
	</div>
       </div>
       <?php /* <div class="col-xs-6 col-sm-6 col-md-6">
       <div class="panel panel-default">
         <div class="panel-body">
           <p class="lead-alt">Install cjdns on Windows</p>	
           <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="#">Windows Guide</a></p>
         </div>
	</div>
       </div>*/; ?>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">Install cjdns on OpenWRT</p>
            <p class="well well-mesh"> <a class="btn btn-mesh btn-block" href="https://wiki.projectmeshnet.org/Install_on_OpenWRT">OpenWRT Guide</a></p>
          </div>
        </div>        
       </div>
      <?php /* <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">Install cjdns on Android</a></p>
            <p class="well well-mesh"> <a class="btn btn-mesh btn-block" href="">Android Guide</a></p>
          </div>
        </div>        
       </div>*/ ;?>
     </div>
   </div>
      <?php /* <div class="row marketing">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="page-header">
          <h1>Deployment Guides</h1>
        </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="text-right"><span class="label label-warning">vps/dedi</span></p>
            <p class="lead-alt">Deploying on a VPS/Dedicated server </p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="#">VPS/Dedicated Guide</a></p>
          </div>
        </div>        
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="text-right"><span class="label label-primary">meshlocal</span></p>
            <p class="lead-alt">Deploying on a residential server/router </p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="#">Homebrew Guide</a></p>
          </div>
        </div>        
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="text-right"><span class="label label-primary">meshlocal</span></p>
            <p class="lead-alt">Deploying as a dedicated relay</p>
            <p class="text-muted">A dedicated relay is a stand-alone wireless AP or backhaul link. (Example: dead-drops w/ wifi)</p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="#">MeshRelay Guide</a></p>
          </div>
        </div>        
       </div>

      </div> 
     </div>

      <div class="row marketing">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="page-header">
          <h1>Application Guides</h1>
        </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">cjdns + Apache HTTPd Configuration w/ DNS</p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="#">Apache Guide</a></p>
          </div>
        </div>        
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">cjdns + Nginx Configuration w/ DNS</p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="#">NGiNX Guide</a></p>
          </div>
        </div>        
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">cjdns + Postfix (stmp server)</p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="#">STMP Guide</a></p>
          </div>
        </div>        
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <p class="lead-alt">cjdns + NodeAtlas</p>
            <p class="well well-mesh"><a class="btn btn-mesh btn-block" href="#">NodeAtlas Guide</a></p>
          </div>
        </div>        
       </div>


      </div> 
     </div> */ ;?>
</div>
<? include '../inc/footer.php'; ?> 
