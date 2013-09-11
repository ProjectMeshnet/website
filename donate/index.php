<?php include '../inc/header.php'; ?>
<?php include '../inc/nav.php'; ?>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
         <li><a href="<?php echo $home; ?>">Home</a></li>
          <li><a href="https://projectmeshnet.wordpress.com">Blog</a></li>
          <li><a href="<?php echo $docs; ?>">Docs</a></li>
          <li class="active"><a href="<?php echo $donate; ?>">Donate</a></li>
          <li><a href="https://wiki.projectmeshnet.org/">Wiki</a></li>
    </ul>
<?php include '../inc/pull-right.php'; ?>
  </div>
</nav>
      <div class="visible-md visible-lg">
          <div class="featurettemd2" style="margin-top:-20px;">
             <div class="container">
                <h2 class="featurette-heading">Help support Project Meshnet.</h2>
                <p class="lead">You can support Project Meshnet in a few ways...</p>
             </div>
           <div class="featurette-divider"></div>
          </div>
      </div>
      <div class="hidden-md hidden-lg">
          <div class="featurettesm" style="margin-top:-20px;">
             <div class="container">
                <h2 class="featurette-heading">Help support Project Meshnet.</h2>
                <p class="lead">You can support Project Meshnet in a few ways...</p>
             </div>
           <div class="featurette-divider"></div>
          </div>
      </div>

      <div class="container">

      <div class="body-content">

       <div class="row marketing">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
          <div class="featurette-divider"></div>
         <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="panel panel-default">
          <div class="panel-body text-center">
            <p class="lead-alt">Donate to Outreach</p>
            <p class="text-muted">Costs associated with hosting and campaigns.</p>
            <p><a class="coinbase-button" data-code="439f7a23503b29d33afaa2bb1fedfc02" data-button-style="donation_small" data-custom="outreach" href="https://coinbase.com/checkouts/439f7a23503b29d33afaa2bb1fedfc02">Donate Bitcoins</a></p>
          </div>
        </div>        
       </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="panel panel-default">
          <div class="panel-body text-center">
            <p class="lead-alt">Sponsor cjdns development</p>
            <p class="text-muted">Donate directly to the developer of cjdns, <a href="https://github.com/cjdelisle/">cjd</a>.</p>
            <p><a class="coinbase-button" data-code="62eccc9d4c8949a10e9ccccaa578f8c5" data-button-style="donation_small" data-custom="cjdns" href="https://coinbase.com/checkouts/62eccc9d4c8949a10e9ccccaa578f8c5">Donate Bitcoins</a><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script></p>
          </div>
        </div>        
       </div>
      </div> 
     </div>
</div>
<script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>
<? include '../inc/footer.php'; ?>
