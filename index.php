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
                            <div class="col-md-4 col-xs-12">
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_title(); ?></h3>
                    <div><?php the_content(); ?></div>
</div>
                    <?php endwhile; ?>
                    <?php endif; ?>

			</div>
        <div class="why-vpn-content-2">


            <div class="row">
                <div class="col-md-6 col-xs-12">


                        <?php
                                $parms = array(
                                'type'=>'post',
                                'category_name'=>'easy-vpn'
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
                <div class="col-md-6 col-xs-12">


                        <?php
                                $parms = array(
                                'type'=>'post',
                                'category_name'=>'kill-switch'
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
        <div class="col-md-10 no-float">

            <div class="col-md-4 col-xs-12">
                <div class="basic-service">
                    <div class="service-top-section">
                        <h2 class="v-align">Basic</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
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
            </div>


        </div>
    </div>
</div>








<?php get_footer() ?>
