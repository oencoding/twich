<?php include 'includes/config.php'; ?>  
<?php include 'includes/head.php'; ?>  
<?php include 'includes/header.php'; ?>  
<?php include 'includes/api.php'; ?>  

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                $apiStreams = twitchStreams('nadriel_nexus');
                $apiChannel = twitchChannel('nadriel_nexus');
                $apiVideos = twitchVideo('nadriel_nexus');
            ?>
                <div class="col-md-8" style="text-align:center;"><h2><?= $apiStreams['messageEtat']; ?></h2></div>
                <div class="col-md-4" style="text-align:right;"><img src="<?= $apiChannel->logo; ?>" width="100px" alt="logo" /></div>
            <?php
            
                if($apiStreams['etat'] == false)
                {
                    foreach($apiVideos->videos as $videos)
                    {
            ?>
                    <div class="col-md-4">
                        <h2><?= $videos->title; ?></h2>
                        <div class="video">
                            <a href="<?= 'video.php/?id='.$videos->_id; ?>" >
                               <img src="<?= $videos->preview; ?>" alt="previous" />
                            </a>
                           
                           
                        </div>
                    </div>
            <?php
                    }
                }
                else
                {
                    echo 'Affichage Live';
                }
            //var_dump();
 ?>
            
            
            
            
        </div>
    </div>

</div>

<!--JS NAVIGATION-->
<script type="text/javascript">
    $(document).ready(function () {
    var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>


<?php include 'includes/footer.php'; ?>  