<?php


// Get the current URL in PHP and title
$postURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$title = " Sportsdior is a great site for sports fans who are looking to engage with others who share their passion. ";

// define social media platforms
$facebook = 'https://web.facebook.com/sharer/sharer.php?u=' . urlencode($postURL);
$whatsapp = 'https://api.whatsapp.com/send?text=' . urlencode($title) . urlencode($postURL);
$linkedin = 'https://www.linkedin.com/sharing/share-offsite/?url=' . urlencode($postURL) . '&title=' . urlencode($title);
$twitter = 'https://twitter.com/share?url=' . urlencode($postURL) . '&text=' . urlencode($title);
?>

<div class="share-btn ">
    <a href="<?php echo $facebook; ?>" target="_blank">
        <i class="fa fa-facebook-square w3-animate-top"></i>
    </a>
    <a href="<?php echo $whatsapp; ?>" target="_blank">
        <i class="fa fa-whatsapp w3-animate-right"></i>
    </a>
    <a href="<?php echo $linkedin; ?>" target="_blank">
        <i class="fa fa-linkedin-square w3-animate-left"></i>
    </a>
    <a href="<?php echo $twitter; ?>" target="_blank">
        <i class="fa fa-twitter-square w3-animate-bottom"></i>
    </a>
</div>