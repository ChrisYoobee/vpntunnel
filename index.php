<?php

	/*
		Template Name: Home Page

	*/

 ?>

<?php get_header(); ?>

<div class="row">
    <div class="col-xs-12 col-sm-12">
    	<?php if(have_posts()): ?>
    	<?php while(have_posts()): the_post(); ?>

    		<?php get_template_part('content', get_post_format()); ?>

    	<?php endwhile; ?>
        <?php endif; ?>
        <div class="why-content">
	           <div class="row text">

                    <?php
                            $parms = array(
                            'type'=>'post',
                            'category_name'=>'why-vpn-title'
                        );
                        $vpn = new WP_Query($parms);
                     ?>
                     <?php if($vpn->have_posts()): ?>
                         <?php while($vpn->have_posts()): $vpn->the_post();?>
                             <h3><?php the_title(); ?></h3>
                             <div><?php the_content(); ?></div>
                         <?php endwhile; ?>
                     <?php endif; ?>


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

    </div>

</div> <!-- First Row -->



</div>


<div class="what-people-saying">
    <div class="row v-align">
        <div class="col-md-10 no-float ">

            <div class="col-md-4 col-xs-12">
                <?php
                        $parms = array(
                        'type'=>'post',
                        'category_name'=>'forbes'
                    );
                    $vpn = new WP_Query($parms);
                 ?>
                <?php if($vpn->have_posts()): ?>
                    <?php while($vpn->have_posts()): $vpn->the_post();?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php the_content(); ?></div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4 col-xs-12">
                <?php
                        $parms = array(
                        'type'=>'post',
                        'category_name'=>'the-guardian'
                    );
                    $vpn = new WP_Query($parms);
                 ?>
                <?php if($vpn->have_posts()): ?>
                    <?php while($vpn->have_posts()): $vpn->the_post();?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php the_content(); ?></div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="col-md-4 col-xs-12">
                <?php
                        $parms = array(
                        'type'=>'post',
                        'category_name'=>'wsj'
                    );
                    $vpn = new WP_Query($parms);
                 ?>
                <?php if($vpn->have_posts()): ?>
                    <?php while($vpn->have_posts()): $vpn->the_post();?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php the_content(); ?></div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>

<div class="vpn-services">

    <div class="row v-align">
        <?php
                $parms = array(
                'type'=>'post',
                'category_name'=>'services-title'
            );
            $vpn = new WP_Query($parms);
         ?>
        <?php if($vpn->have_posts()): ?>
            <?php while($vpn->have_posts()): $vpn->the_post();?>
                <h3 class="services-title"><?php the_title(); ?></h3>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="col-md-10 no-float">




            <?php
                    $parms2 = array(
                    'post_type'=>'services',
                );
                $VPN = new WP_Query($parms2);
             ?>
            <?php if($VPN->have_posts()): ?>
            <?php while($VPN->have_posts()): $VPN->the_post();?>
                <div class="col-md-4 col-xs-12">
                    <div class="basic-service">
                        <div class="service-top-section">
                            <h2 class="v-align"><?php the_title(); ?></h2>
                        </div>
                        <div class="services-content">
                            <div class="service-time"><h4><?php echo get_post_meta( $post->ID, 'subscriptionInfo', true ); echo $my_meta["subscriptionInfo"]; ?></h4></div>
                            <div><h2><?php echo get_post_meta( $post->ID, 'price', true ); echo $my_meta["price"]; ?><h2></div>
                            <p>Per Month</p>
                            <div class="conditions">
                            <?php echo get_post_meta( $post->ID, 'billingConditions', true ); echo $my_meta["billingConditions"]; ?>
                            <h4>30 Day Money Back Guarentee</h4>
                            </div>
                        </div>
                        <div class="btn-primary header-button service-btn">
                            <h3>Get <?php echo get_post_meta( $post->ID, 'subscriptionInfo', true ); echo $my_meta["subscriptionInfo"]; ?></h3>
                        </div>


                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>



            <!-- <div class="col-md-4 col-xs-12">
                <div class="best-service ">
                    <div class="best-top-section">
                        <h2 class="v-align">Best</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="basic-service">
                    <div class="service-top-section">
                        <h2 class="v-align">Standard</h2>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
</div>








<?php get_footer() ?>
