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
                <div class="col-md-8"><?= $apiStreams['messageEtat']; ?></div>
                <div class="col-md-4">Emplacement Photos</div>
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
            var_dump($apiVideos->videos);
                
               
             

            ?>
            
            
            
            
        </div>
    </div>

</div>


<?php include 'includes/footer.php'; ?>  