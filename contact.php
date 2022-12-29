<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="graphics/Light BG Logo favicon.svg">
    <title>Contact The McVinci Brand</title>
    <link rel="stylesheet" href="contact_style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.html">
        <div class="back_btn">
            <img src="back_arrow.svg">
        </div>
    </a>

    <div class="wholebody_div">
        <p class="intro">We would love<br>to work with you</p>

        <div class="form_box"> 
            <form action="functions.php" method="POST">
                <h3>Tell us more about your project</h3>

                <label>What`s your brand/business name?</label>
                <input required name="Brandname">

                <label>How can you be contacted? (Preferrably your email)</label>
                <input required name="contact">

                <label>Provide a summary of your project</label>
                <textarea required name="project_details"></textarea>

                <input class="submit_btn" type="submit" value="Submit your Message">
            </form>


            <?php
                if (isset($_GET["error"])) {
                    if($_GET["error"] == "none") {
                        echo "<p class='successmessage'>Thank you for reaching out to us. We`ll be sure to contact you immediately.</p>";
                    }
                    else if($_GET["error"] == "smthwentwrong") {
                        echo "<p class='failuremessage'>Something went wrong on our end. Please try again.</p>";
                    }
                }
            ?>

        </div>

        <footer>
            <a href="#hero"> 
                <div class="footer-image">
                    <img src="graphics/Light Stroke Logo favicon.svg">
                </div>
            </a>

            <div class="footer-text">
                <div class="f-contact">
                    <h3>Get In Touch</h3>
                    Kaduna, Nigeria<br>
                    +234(0)905-1123-600
                </div>
                
                <div class="f-connect">
                    <h3>Contact Us</h3>
                    <div class="icons">
                        <a href="https://www.facebook.com/TheMcVinciBrand" target="_blank"><img src="graphics/facebook.svg"></a>
                        <a href="https://www.instagram.com/themcvincibrand" target="_blank"><img src="graphics/instagram.svg"></a>
                        <a href="mailto:themcvincibrand@gmail.com" target="_blank"><img src="graphics/email.svg"></a>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    
   

    
</body>
</html>