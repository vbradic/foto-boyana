<div class="row" id="bg">

			<div class="col-md-12 text-center description" id="search-container">
			<!--  <img class="img-responsive" src="app/imgs/home_page/home_page.jpg"> -->
					
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                 <!--  <a class="navbar-brand" href="#">PHOTO GALLERIES</a> -->
                 
                 <p class="navbar-brand">PHOTO GALLERIES</p>
                </div>
                <ul class="nav navbar-nav">
                  <li><a id="weddings-scroll-start" href="#">WEDDINGS</a></li>
                  <li><a id="vow-scroll-start" href="#">VOW RENEWALS</a></li>
                  <li><a id="family-scroll-start" href="#">FAMILY PORTRAITS</a></li>
                  <li><a id="maternity-scroll-start" href="#">MATERNITY AND NEW BORN PHOTOS</a></li>
                </ul>
              </div>
            </nav>
					
  					<!--  <div id="search-bg"></div>
					<div class="paragraphs" id="search">
					<p><a class="home-link" href=""><b>WEDDINGS</b></a><a class="home-link" href=""><b>   NEW BORN PHOTOGRAPHY   </b></a> <a class="home-link" href=""><b> VOW RENEWAL </b></a> </p>
					<p><a class="home-link" href=""><b>FAMILY PHOTOGRAPHY</b></a><a class="home-link" href=""><b>CORPORATE PHOTOGRAPHY</b></a> </p>
					</div>
					-->
			</div>
			
</div>

<br>
<br id="weddings-scroll-end">
<!--  <hr class="style-two" style="width: 70%; margin: auto;"> -->

<!-------------------------- WEEDINGS ------------------------>
<div class="row">
	<div class="col-md-6 col-md-offset-3 text-center">
		<h2 class="headline">WEDDINGS</h2>	
	</div>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1 text-center">
	
	
    	<p class="home-page-category-description">Coverage from 2 hours to whole day. NO travel fees anywhere on Oahu.
        			   Servicing all islands. Prices start at <b>899$</b> .</p>
    			   

        <div class="container gallery-container home-galleries">
               <div class="tz-gallery" id="photos">
            
            <?php 	foreach($weddings_image_list as $gallery_image) { ?>
                			
            				<div class="img-holder">
            				<a class="" href="<?php echo $gallery_image->img_path ;?>"> 
            				<img class="img-walls img-responsive" src="<?php echo $gallery_image->img_path ;?>">
            				</a>
            				</div>	    				
            <?php } ?>
         				
            	</div>
        </div>
	</div>
</div>

<br>
<br id="vow-scroll-end">

<!--  <hr class="style-two" style="width: 70%; margin: auto;"> -->
<br>

<!-------------------------- VOW RENEWALS ------------------------>

<div class="row home_gallery_head">
	<div class="col-md-6 col-md-offset-3 text-center">
		<h2 class="headline">VOW RENEWALS</h2>	
	</div>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1 text-center">
	
	
    	<p class="home-page-category-description">Renew your vows in Hawaii. We can recommend an officiant 
    	and beach location for you. Prices start at <b>599$</b> .</p>
    			   

        <div class="container gallery-container home-galleries">
               <div class="tz-gallery" id="photos">
            
            <?php 	foreach($vow_renewal_image_list as $gallery_image) { ?>
                			
            				<div class="img-holder">
            				<a class="" href="<?php echo $gallery_image->img_path ;?>"> 
            				<img class="img-walls img-responsive" src="<?php echo $gallery_image->img_path ;?>">
            				</a>
            				</div>	    				
            <?php } ?>
         				
            	</div>
        </div>
	</div>
</div>


<br>
<br id="family-scroll-end">

<!--  <hr class="style-two" style="width: 70%; margin: auto;"> -->

<!-------------------------- VOW RENEWALS ------------------------>

<div class="row home_gallery_head">
	<div class="col-md-6 col-md-offset-3 text-center">
		<h2 class="headline">FAMILY PORTRAITS</h2>	
	</div>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1 text-center">
		
    	<p class="home-page-category-description">Have your family portraits made on a beautiful Hawaiian beach. 
    	Morning and sunset shoots available. Starting at <b>499$</b> .</p>
    			   

        <div class="container gallery-container home-galleries">
               <div class="tz-gallery" id="photos">
            
            <?php 	foreach($family_image_list as $gallery_image) { ?>
                			
            				<div class="img-holder">
            				<a class="" href="<?php echo $gallery_image->img_path ;?>"> 
            				<img class="img-walls img-responsive" src="<?php echo $gallery_image->img_path ;?>">
            				</a>
            				</div>	    				
            <?php } ?>
         				
            	</div>
        </div>
	</div>
</div>


<br>
<br id="maternity-scroll-end">

<!-- <hr class="style-two" style="width: 70%; margin: auto;"> -->

<!-------------------------- NEW BRON PHOTO  ------------------------>

<div class="row home_gallery_head">
	<div class="col-md-6 col-md-offset-3 text-center">
		<h2 class="headline">MATERNITY AND NEW BORN PHOTOS</h2>	
	</div>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1 text-center">
		
    	<p class="home-page-category-description">Got a little one on the way? 
    	I’d love to be your Hawaii maternity new born photographer. Price start <b>699$</b> .</p>
    			   

        <div class="container gallery-container home-galleries">
               <div class="tz-gallery" id="photos">
            
            <?php 	foreach($maternity_and_new_born_image_list as $gallery_image) { ?>
                			
            				<div class="img-holder">
            				<a class="" href="<?php echo $gallery_image->img_path ;?>"> 
            				<img class="img-walls img-responsive" src="<?php echo $gallery_image->img_path ;?>">
            				</a>
            				</div>	    				
            <?php } ?>
         				
            	</div>
        </div>
	</div>
</div>


<br>
<br>

<!--  <hr class="style-two" style="width: 70%; margin: auto;"> -->

