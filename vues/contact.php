<!-- Header gallery -->
<div class="container-fluid">
    
</div> <!-- container-fluid -->
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>    

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
