<?php include 'includes/config.php'; ?>  
<?php include 'includes/head.php'; ?>  
<?php include 'includes/header.php'; ?>  

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Hello world !</h1>

            
            

            <?php
                $url = 'https://api.twitch.tv/kraken/streams/nadriel_nexus?client_id=6u9mielwde1ney06el1m3q0lnoxq38w';
                //$url = preg_replace("/ /", "%20", $url);
                
                $api = file_get_contents($url);
                $diff = json_decode($api);
                
                if($diff->stream == null)
                {
                    $etat = false;
                }
                else
                {
                    $etat = true;
                    var_dump($diff);
                }

            ?>
            
            <?php
               /* function status_webtv($channel_name)
                {
                    $channelName = htmlspecialchars($channel_name, ENT_QUOTES);

                    $clientId = 'th9jl1swsww85dl2t1emi2gmlybrw7c';             // Register your application and get a client ID at <a href="https://www.twitch.tv/settings?section=applications" rel="nofollow">http://www.twitch.tv/settings?section=applications</a>
                    $online = 'En ligne';     // Set online image here
                    $offline = 'Hors ligne';   // Set offline image here
                    $json_array = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams/'.strtolower($channelName).'?client_id='.$clientId https://api.twitch.tv/kraken/streams/'.strtolower($channelName).'?client_id='.$clientId</a>), true);

                    if ($json_array['stream'] != NULL)
                    {
                    $channelTitle = $json_array['stream']['channel']['display_name'];
                    $streamTitle = $json_array['stream']['channel']['status'];
                    $currentGame = $json_array['stream']['channel']['game'];

                    echo "$channelTitle is <img src='$online' alt='Online' /> playing $currentGame";
                    }
                    else
                    {
                    echo "$channelName is <img src='$offline' alt='Offline' />";
                    }
                }*/
            
            ?>

            
            
            
            
            
        </div>
    </div>

</div>


<?php include 'includes/footer.php'; ?>  