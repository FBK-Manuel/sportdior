<?php
$adsInfo = array(
    'interests' => ['technology', 'sports', 'games', 'football'],
    'ads' => 'personalized',
    'language' => 'en',
);

$adsInfoConvert = json_encode($adsInfo);
if (isset($_POST['click'])) {
    # code...
    setcookie('cookie_accepted', $adsInfoConvert, time() + (30 * 24 * 60 * 60));
}

// Check if the cookie is set and not expired
$showContent = !isset($_COOKIE['cookie_accepted']) || (isset($_COOKIE['cookie_accepted']) && ($_COOKIE['cookie_accepted']) !== $adsInfoConvert);

?>
<?php if ($showContent) : ?>
<div id="w3-container" class="w3-container  w3-animate-zoom"
    style="position:fixed; display:none; width:100%; bottom: 0;">
    <div class="w3-panel w3-dark-gray w3-round-xlarge w3-card">
        <p>We use cookies in this website to give you the best experience on our site and show you relevant ads. to
            find out more, read our <a class="w3-text-blue" href="privacy.php">pravacy policy</a> and <a
                class="w3-text-blue" href="#">cookie policy</a>. </p>
        <form method="post">
            <input id="w3-btn" type="submit" value="Okay" name="click"
                class="w3-btn w3-padding  w3-round-large w3-margin w3-deep-orange w3-hover-pale-blue">
        </form>
    </div>
</div>
<?php endif; ?>

<script>
function showContainer() {
    const cookiesContainer = document.getElementById('w3-container');
    const cookiesBtn = document.getElementById('w3-btn');

    cookiesContainer.style.display = "block";
    cookiesBtn.style.display = "block";
}
setTimeout(showContainer, 3000);
</script>