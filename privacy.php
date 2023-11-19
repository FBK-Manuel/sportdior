<?php include("headers.php"); ?>


<body>
    <div class="w3-container">
        <div class="w3-center">
            <h4><b>Privacy Policy for sportdior.com</b></h4>
        </div>
        <?php
        function addLineBreaks($text)
        {
            $sentences = preg_split('/(?<=[.?!:])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

            foreach ($sentences as $sentence) {
                echo "<p>$sentence</p>\n";
            }
        }

        $privacy = "
Welcome to sportdior.com, a blog dedicated to bringing you the latest updates and insights in the world of sports.This Privacy Policy outlines how we collect, use, and protect your personal information when you visit sportdior.com.
 
<b>*Information We Collect</b>:
<i><b>Personal Information:</b></i> When you subscribe to our newsletter, react on our posts, or interact with our site, we may collect personal information such as your name and email address.

<i><b>Usage Data:</b></i>
 We automatically collect information about how you interact with sportdior.com, including your IP address, browser type, pages visited, and time spent on the site.

 <b>*How We Use Your Information</b>:
<i><b>Personalization:</b></i> We use the information collected to personalize your experience on sportdior.com, providing you with relevant content based on your interests.

<i><b>Communication:</b></i> If you subscribe to our newsletter, we may use your email to send you updates, promotions, and other relevant information.You can opt-out at any time.

<b>*Cookies</b>:
<i><b>Cookies:</b></i> sportdior.com uses cookies to enhance your browsing experience, cookies are small files stored on your device that help us analyze site usage and improve functionality.

<b>*Third-Party Links</b>:
<i><b>External Links:</b></i> sportdior.com may contain links to external websites.We are not responsible for the privacy practices of these sites.Please review the privacy policies of external sites before providing any personal information.

 <b>*Data Security</b>:
<i><b>Security Measures:</b></i> We implement security measures to protect your personal information.However, please note that no method of transmission over the internet or electronic storage is completely secure.

<b>*Your Rights</b>:
<i><b>Access and Control:</b></i> You have the right to access, correct, or delete your personal information.Contact us if you wish to exercise these rights.

<b>*Policy Updates</b>:
<i><b>Updates:</b></i> sportdior.com may update this Privacy Policy periodically.We will notify you of any significant changes via email or a prominent notice on the website.
 
<b>*Contact Us</b>:
If you have any questions or concerns about our Privacy Policy, please contact us at <strong>[sportdior247@gmail.com]</strong>.

<b>*Conclusion</b>:
By using SportDior, you agree to the terms outlined in this Privacy Policy.We are committed to protecting your privacy and ensuring a secure and enjoyable experience on our blog.

<b>Last Updated:</b> [18/112023]
        ";

        addLineBreaks($privacy);
        ?>

    </div>
    <?php include("footers.php"); ?>
</body>

</html>