<?php get_header() ?>
<?php 
	$banner = get_field('banner_image');
?>
<section class="hero-wrap js-fullheight" style="background-image: url('<?php echo $banner['url']; ?>');" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
							<a href="https://www.youtube.com/watch?v=KRIBx-BGRJk" class="icon-video popup-youtube d-flex justify-content-center align-items-center mr-3">
    						<span class="ion-ios-play play mr-2"></span>
    						<span class="watch">Watch Video</span>
    					</a>
						</p>
						<?php
							$headline = get_field('first_section_headlines');	
							$subtitle = get_field('first_section_subtitle');	
							// $video = get_field('video');	
							$firstthreefeature = get_field('first_three_features');
							// print_r($firstthreefeature);  
						?>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $headline; ?></h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1 }"><?php echo $subtitle; ?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-services ftco-no-pt">
      <div class="container">
        <div class="row services-section">

		<?php 
			$rows = get_field('first_three_features');
			if( $rows ) { 
				foreach( $rows as $row ) {
					$image = $row['image'];
					$title = $row['title'];
					$content = $row['content'];
					$feature_url = $row['feature_url'];
					// print_r($image);
				?>
		
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
		     <div class="icon">
			  <img src="<?php echo $image['url'];?>" style=" height:100px; " >
			  </div>
              <div class="media-body">
                <h3 class="heading mb-3"><?php echo $title;?></h3>
                <p><?php echo $content;?></p>
                <p><a href="<?php echo $feature_url;?>" class="btn btn-primary" target="_blank">Read more</a></p>
              </div>
            </div>      
          </div>
		  <?php 
		  }
		  }
		  
		  ?>
        </div>
      </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
    	<div class="container">
    		<div class="row d-flex">
			<?php
							$secondsection = get_field('second_section');	
							$formfieldimage = $secondsection['0']['form_field_image'];
							$welcometext = $secondsection['0']['welcome_text'];
						?>
    			<div class="col-md-6 col-lg-4 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(<?php echo $formfieldimage['url']; ?>;);"width="500" height="600">
    					<div class="request-quote py-5">
	    					<div class="py-2">
	    						<span class="subheading">Be Part of our Business</span>
	    						<h3>Request A Quote</h3>
	    					</div>
	    					<form action="#" class="request-form ftco-animate">
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="First Name">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Last Name">
			    				</div>
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon-arr"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="" class="text-dark">Select Your Services</option>
	                        <option value="" class="text-dark">Construction</option>
	                        <option value="" class="text-dark">Renovation</option>
	                        <option value="" class="text-dark">Interior Design</option>
	                        <option value="" class="text-dark">Exterior Design</option>
	                        <option value="" class="text-dark">Painting</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Phone">
			    				</div>
		    					<div class="form-group">
			              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
			            </div>
			    			</form>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-8 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome</span>
		            <h2 class="mb-4">Since we started work in 1980</h2>
		            <p><?php echo $welcometext; ?></p>
		            
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Years of experience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Project Done</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Our Architect</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate d-flex">
		            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
		              <div class="text">
		                <strong class="number" data-number="1100">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-project bg-light" data-section="projects">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Accomplishments</span>
            <h2 class="mb-4">Our Projects</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 testimonial">
            <div class="carousel-project owl-carousel">
            	<div class="item">
			<?php 
			$rows = get_field('third_section-our_project');
			if( $rows ) { 
				foreach( $rows as $row ) {
					$image = $row['image'];
					$title = $row['title'];
					$subtitle = $row['sub_title'];
					// $feature_url = $row['feature_url'];
					// print_r($rows);
				?>
            		<div class="project">
		    					<div class="img">
				    				<img src="<?php echo $image['url']; ?>" class="img-fluid" alt="Colorlib Template">
				    				<a href="<?php echo $image['url']; ?>" class="icon image-popup d-flex justify-content-center align-items-center">
				    					<span class="icon-expand"></span>
				    				</a>
			    				</div>
			    				<div class="text px-4">
			    					<h3><a href="#"><?php echo $title; ?></a></h3>
			    					<span><?php echo $subtitle; ?></span>
			    				</div>
		    				</div>
            	</div>
				<?php }

			 }
				?>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section" data-section="team">
    	<div class="container-fluid p-0">
    		<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Architect</span>
            <h2 class="mb-4">Behind those Beautiful Works</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row no-gutters">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
			<?php 
			$rows = get_field('team_setion');
			if( $rows ) { 
				foreach( $rows as $row ) {
					$image = $row['image'];
					$position = $row['position'];
					$name = $row['name'];
					$about = $row['about'];
					$socialmedialinks = $row['social_media_links'];
					// $feature_url = $row['feature_url'];
					// print_r($rows);
				?>
								<div class="img align-self-stretch" style="background-image: url(<?php echo $image['url'];?>);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<span class="position mb-2"><?php echo $position; ?></span>
									<h3 class="mb-4"><?php echo $name; ?></h3>
									<div class="faded">
										<p><?php echo $about; ?></p>
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="<?php echo $socialmedialinks['twitter']; ?>" target="_blank"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="<?php echo $socialmedialinks['facebook']; ?>" target="_blank"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="<?php echo $socialmedialinks['google_plus']; ?>" target="_blank"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="<?php echo $socialmedialinks['instagram']; ?>" target="_blank"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>

				<?php }
			} ?>
				</div>
    	</div>
    </section>


    <section class="testimony-section" data-section="testimony">
      <div class="container">
        <div class="row ftco-animate justify-content-center">
        	<div class="col-md-12 d-flex align-items-center">
        		<div class="carousel-testimony owl-carousel">
				<?php 
			$rows = get_field('testimony_section');
			if( $rows ) { 
				foreach( $rows as $row ) {
					$image = $row['image'];
					$message = $row['message'];
					$yourname = $row['your_name'];
					$about = $row['about'];
					$your_position = $row['your_position'];
					// $feature_url = $row['feature_url'];
					// print_r($rows);
				?>
	        		<div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">
		              <div class="user-img d-flex align-self-stretch" style="background-image: url(<?php echo $image['url'];?>)">
		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4"><?php echo $message;?></p>
			                <p class="name"><?php echo $yourname;?></p>
			                <span class="position"><?php echo $your_position;?></span>
		                </div>
		              </div>
		            </div>
	        		</div>
					<?php }
						} ?>
  		            </div>
	        		</div>
	        	</div>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" data-section="blog">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Read Our Stories</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
		<div class="row d-flex">
				<?php
 
 // The Query
 $args = array(
	'numberposts' => 6
  );
 $the_query = new WP_Query( $args );
//   print_r($the_query);
 // The Loop
 if ( $the_query->have_posts() ) {
	 while ( $the_query->have_posts() ) {
		 $the_query->the_post();
 
		?>
		
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="<?php echo get_permalink(); ?>" class="block-20" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-3">
              			<span class="day"><?php echo get_the_date('d');?></span>
              		</div>
              		<div class="two">
              			<span class="yr"><?php echo get_the_date('Y');?></span>
              			<span class="mos"><?php echo get_the_date('M');?></span>
              		</div>
              	</div>
                <h3 class="heading"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '...');?>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="<?php echo get_permalink(); ?>" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2"><?php echo get_the_author(); ?></a>
	                	<a href="<?php echo get_permalink(); ?>" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
	          </div>
            </div>
		  </div>
			<?php
				}
			}
				wp_reset_postdata();
				?>
				</div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" data-section="contact">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row no-gutters block-9" style="margin-right: 150px;margin-left: 150px;">
          <div class="col-md-6 order-md-last d-flex" >
          </div>
		  <?php echo do_shortcode('[contact-form-7 id="236" title="Contact form 1"]');?>  
          <div class="col-md-6 ">
          	<!-- <div id="map" class="bg-white"></div> -->
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
				  <?php 
				  $rows = get_field('contact');
				  if( $rows ) { 
				foreach( $rows as $row ) {
					$address = $row['address'];
					$contact_number = $row['contact_number'];
					$email = $row['email'];
					$website = $row['website'];
					// print_r($rows);
				?>
          		<h3 class="mb-4">Address</h3>
	            <p><?php echo $address;?></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920"><?php echo $contact_number;?></a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com"><?php echo $email;?></a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#"><?php echo $website;?></a></p>
	          </div>
          </div>
        </div>
		<?php
				}
					}
							?>
      </div>
    </section>
	
<?php get_footer() ?>