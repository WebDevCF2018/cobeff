<!-- Header gallery -->
<div class="container-fluid">
    <div class="row tm-contact-form-row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-contact-form-col-left">
            <h2 class="tm-contact-form-title">Contact Us</h2>
            <form action="contact.php" method="post" class="tm-contact-form">
                    
                <div class="form-group">
                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                </div>
                <div class="form-group">
                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                </div>
                <div class="form-group">
                    <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                </div>    
                        
                <div class="form-group">
                    <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                </div>    
                        
                <div class="form-group">
                    <button type="submit" class="pull-xs-right tm-submit-btn">Submit</button>
                </div>
                        
            </form>  
        </div>  
    </div>
</div>
        
<script src="js/jquery-1.11.3.min.js"></script>

<script>     
    $(window).load(function(){

        /* Gallery pop up
        -----------------------------------------*/
        $('.tm-header-gallery').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery:{enabled:true}                
        });
    });
</script>             
</body>
</html>
