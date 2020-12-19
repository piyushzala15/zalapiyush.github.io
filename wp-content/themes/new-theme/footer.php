<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new_theme
 */

?>
<?php 
				  $rows = get_field('footer','option');
				  if( $rows ) { 
				foreach( $rows as $row ) {
					$first_section_text  = $row['first_section_text'];
          $menu_links = $row['menu_link'];
          $services = $row['services'];
					$address = $row['address'];
					$phone = $row['phone'];
					$email = $row['email'];
					$social_media = $row['social_media'];
					$copyright = $row['copyright_text'];
					// print_r($rows);
?>

<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Square</h2>
              <p><?php echo $first_section_text; ?></p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="<?php echo $social_media['twitter']; ?>"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="<?php echo $social_media['facebook']; ?>"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="<?php echo $social_media['instagram']; ?>"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4" id="ftco-nav">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
              <?php 
        $menu = 'footer links';
        $args = array(
                'order'                  => 'ASC',
                'orderby'                => 'menu_order',
                'post_type'              => 'nav_menu_item',
                'post_status'            => 'publish',
                'output'                 => ARRAY_A,
                'output_key'             => 'menu_order',
                'nopaging'               => true,
                'update_post_term_cache' => false );
        $items = wp_get_nav_menu_items( $menu, $args ); 
        // print_r($items);
        
        foreach($items as $item){ ?>
            
                <li><a href="#" data-nav-section="<?php echo strtolower($item->title);?>"><span class="icon-long-arrow-right mr-2"  ></span><?php echo $item->title;?></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4" id="ftco-nav">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">   
              <?php 
        $menu = 'Services';
        $args = array(
                'order'                  => 'ASC',
                'orderby'                => 'menu_order',
                'post_type'              => 'nav_menu_item',
                'post_status'            => 'publish',
                'output'                 => ARRAY_A,
                'output_key'             => 'menu_order',
                'nopaging'               => true,
                'update_post_term_cache' => false );
        $items = wp_get_nav_menu_items( $menu, $args ); 
        // print_r($items);
        
        foreach($items as $item){ ?>             
                <li><a href="#" data-nav-section="<?php echo strtolower($item->title);?>" ><span class="icon-long-arrow-right mr-2"></span><?php echo $item->title;?></a></li>
              <?php
                }
              ?>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $address; ?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $phone; ?></span></a></li>
	                <li><a href="mailto:info@yourdomain.com"><span class="icon icon-envelope"></span><span class="text"><?php echo $email; ?></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <?php echo $copyright; ?> <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://threadbit.in" target="_blank">zala</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <?php
    }
  }
  ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
