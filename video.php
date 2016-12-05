<?php include 'includes/config.php'; ?>  
<?php include 'includes/head.php'; ?>  
<?php include 'includes/header.php'; ?>  
<?php include 'includes/api.php'; ?>  

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center><iframe src='<?= "https://player.twitch.tv/?video=".$_GET['id']; ?>' frameborder="0" scrolling="no" height="600" width="800"></iframe></center>
        </div>
    </div>
</div>

