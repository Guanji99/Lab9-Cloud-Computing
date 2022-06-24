<footer>
        <div class="footer_part1">
            <div class="footer_contact_us">
                <div class="footer_contact_us_title">
                    <h3>Contact Us</h3>
                </div>
                <div class="footer_contact_us_email">
                    Email: recipe@gmail.com
                </div>
            </div>
            <div class="footer_contact_us_social_media">
                <div class="footer_social_media_title">
                    <h3>Social Media</h3>
                </div>
                <div class="social_media_icon">
                    <div class="facebook">
                        <a href="">Facebook</a>
                    </div>
                    <div class="instagram">
                        <a href="">Instagram</a>
                    </div>
                    <div class="twitter">
                        <a href="">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes\rating.php';?>
        <div class="footer_part3">
        <h3>Feedback</h3>
        <div>
            <form id="feedback" action="includes/feedback.insert.php" method="POST">
                <input id="feedback_text" type="text" name="feedback_text">
                <input type="submit">
            </form>
        </div>
    </div>
</footer>
    <script>
        document.getElementById("feedback").onsubmit  = function(){
			event.preventDefault();
			var pass = true;
                    if (check == 0){      
                        pass = false;
				        alert("Please login to submit a feedback.");
				        return false;
                
                    }
                    if ( pass == true ){
                        this.submit();
                    }
        }

    </script>