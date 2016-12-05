 <?php

    define("KEY", '6u9mielwde1ney06el1m3q0lnoxq38w');
    define("GETKEY", 'client_id=');
    define("STREAMS", 'https://api.twitch.tv/kraken/streams/');
    define("VIDEOS", 'https://api.twitch.tv/kraken/channels/');
    define("CHANNELS", 'https://api.twitch.tv/kraken/channels/');
    
    //https://api.twitch.tv/kraken/channels/nadriel_nexus/videos?limit=10&broadcasts=true&client_id=6u9mielwde1ney06el1m3q0lnoxq38w

    function twitchStreams($chaine)
    {

            $url = STREAMS.$chaine.'?'.GETKEY.KEY;

            $api = file_get_contents($url);
            $diff = json_decode($api);

            if($diff->stream == null)
            {
                $etat = false;
                $messageEtat = 'Chaine actuellement hors ligne';
            }
            else
            {
                $etat = true;
                $messageEtat = 'En ligne';
                var_dump($diff);
            }
            $tab = array(
                'etat' => $etat,
                'messageEtat' => $messageEtat,
                'diff' => $diff,
            );
            return $tab;
    }

    function twitchChannel($chaine)
    {

        $url = CHANNELS.$chaine.'?'.GETKEY.KEY;

        $api = file_get_contents($url);
        $diff = json_decode($api);


        return $diff;
    }

    function twitchVideo($chaine)
    {   
        //https://api.twitch.tv/kraken/channels/nadriel_nexus/videos?limit=10&broadcasts=true&client_id=6u9mielwde1ney06el1m3q0lnoxq38w
        $limit = 'limite=10';
        $broadcast = 'broadcasts=true';
        $url = VIDEOS.$chaine.'/videos?'.$limit.'&'.$broadcast.'&'.GETKEY.KEY;
        $api = file_get_contents($url);
        $diff = json_decode($api);
        
        return $diff;
        
        
        
    }
?>
            