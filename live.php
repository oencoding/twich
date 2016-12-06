<?php include 'includes/config.php'; ?>  
<?php include 'includes/head.php'; ?>  
<?php include 'includes/header.php'; ?>  
<?php include 'includes/api.php'; ?>  
 <?php
    $apiStreams = twitchStreams('nadriel_nexus');
    $apiChannel = twitchChannel('nadriel_nexus');
    $apiVideos = twitchVideo('nadriel_nexus');
?>

<div class="container">
    <div class="row">
        <div class="col-md-8"><span class="title"><?= $apiStreams['messageEtat']; ?></div>
        <div class="col-md-4"><img src="<?= $apiChannel->logo; ?>" width="100px" alt="logo" /></div>
        <div class="col-md-8 col-xs-12">
           <br />
            
               
               
                <?php
                if($apiStreams['etat'] == false)
                {

                }
                else
                {
                   ?>
            
                        <script src= "http://player.twitch.tv/js/embed/v1.js"></script>
                            <div id="<?php echo KEY; ?>"></div>
                            <script type="text/javascript">
                                var options = {
                                    width: 854,
                                    height: 480,
                                    channel: "nadriel_nexus", 
                                    //video: "{VIDEO_ID}"       
                                };
                                var player = new Twitch.Player("<?php echo KEY; ?>", options);
                                player.setVolume(0.0);
                                player.addEventListener(Twitch.Player.PAUSE, () => { console.log('Player is paused!'); });
                        </script>
            
                    <?php
                }
            //var_dump();
 ?>
            
            
            
                <script src= "http://player.twitch.tv/js/embed/v1.js"></script>
                            <div id="<?php echo KEY; ?>"></div>
                            <script type="text/javascript">
                                var options = {
                                    width: 840,
                                    height: 480,
                                    channel: "nadriel_nexus", 
                                    //video: "{VIDEO_ID}"       
                                };
                                var player = new Twitch.Player("<?php echo KEY; ?>", options);
                                player.setVolume(0.0);
                                player.addEventListener(Twitch.Player.PAUSE, () => { console.log('Player is paused!'); });
                </script>
        
        </div>
        <div class="col-md-4 col-xs-12">
            <iframe frameborder="0" 
                    scrolling="no" 
                    id="chat_embed" 
                    src="http://www.twitch.tv/nadriel_nexus/chat" 
                    height="480px" 
                    width="auto">
            </iframe>
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