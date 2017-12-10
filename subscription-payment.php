<?php
	/*
		Template Name: Subscription Payment
	*/
 ?>
 <?php get_header(); ?>



 <div class="payment-contaoiner"  id="why-vpn" >
      <div class="row">

            <div class="why-vpn-content-3">
           <div class="row">
                     <?php
                             $parms2 = array(
                                 'post_type'=>'vpn',
                             );
                         $VPN = new WP_Query($parms2);
                      ?>
                     <?php if($VPN->have_posts()): ?>
                     <?php while($VPN->have_posts()): $VPN->the_post();?>
                     <div class="col-md-6 col-xs-12 vpn-info">
                         <?php the_post_thumbnail(); ?>
                         <h3><?php the_title(); ?></h3>
                         <div><?php the_content(); ?></div>
                     </div>
                     <?php endwhile; ?>
                     <?php endif; ?>
             </div>
             </div>

    </div>
 </div>



 <?php get_footer() ?>
