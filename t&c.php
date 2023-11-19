<?php include("headers.php"); ?>


<body>
    <div class="w3-container">
        <div class="w3-center">
            <h4><b>Terms of Service for sportdior.com</b></h4>
        </div>
        <?php
        function addLineBreaks($text)
        {
            $sentences = preg_split('/(?<=[.?!:])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

            foreach ($sentences as $sentence) {
                echo "<p>$sentence</p>\n";
            }
        }


        $terms = "
        <b></b>
        Welcome to sportdior.com, your go-to source for exciting sports content.By accessing or using sportdior.com, you agree to comply with and be bound by the following terms and conditions.

   <b>Acceptance of Terms</b>:
        By using sportdior.com, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service, If you do not agree with any part of these terms, please refrain from using our services.
        
        <b>User Conduct</b>:
        You are responsible for your use of sportdior.com and agree to use it in compliance with applicable laws and regulations.
        Do not engage in any activity that could disrupt, damage, or interfere with the proper functioning of sportdior.com.
        
        <b>Intellectual Property</b>:
        All content on sportdior.com, including articles, images, and logos, is the property of sportdior.com and is protected by intellectual property laws.You may not use, reproduce, or distribute our content without permission.
        
        <b>User Accounts</b>:
        You are not required to create an account to access our content, all articles,images, and logos are account free.
        
         <b>Disclaimer of Liability</b>:
        sportdior.com provides content for informational purposes only.We make no representations or warranties regarding the accuracy, completeness, or reliability of our content, use the information at your own risk.
        
         <b>Third-Party Links</b>:
         Sportdior.com may contain links to third-party websites, we are not responsible for the content, privacy practices, or availability of these external sites.
        
         <b>Termination</b>:
        Sportdior.com reserves the right to terminate or suspend your access to the site without prior notice for violating these Terms of Service.
        
         <b>Changes to Terms</b>:
        Sportdior.com may update these terms periodically, your continued use of the site after such changes constitutes your acceptance of the new terms.
        
        <b>Contact Us</b>:
        If you have any questions or concerns about these Terms of Service, please contact us at <i><b>[sportdior247@gmail.com]</b></i>.
        
        <b>Conclusion</b>:
        Thank you for being a part of sportdior.com we hope you enjoy our content and adhere to these Terms of Service to ensure a positive experience for all users.
        
        <b>Last Updated:</b> [18/11/2023]
        ";

        addLineBreaks($terms);
        ?>

    </div>
    <?php include("footers.php"); ?>
</body>

</html>