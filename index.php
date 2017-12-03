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
            $programmes = new WP_Query($parms);
         ?>
         <?php if($programmes->have_posts()): ?>
             <?php while($programmes->have_posts()): $programmes->the_post();?>
                 <h3><?php the_title(); ?></h3>
                 <div><?php the_content(); ?></div>

             <?php endwhile; ?>
         <?php endif; ?>


         <div class="why-vpn-content-3">


			<div class="row">
                <div class="col-md-4 col-xs-12">


                        <?php
            					$parms = array(
            					'type'=>'post',
            					'category_name'=>'lightning-speed'
            				);
            				$programmes = new WP_Query($parms);
            			 ?>

				<?php if($programmes->have_posts()): ?>
					<?php while($programmes->have_posts()): $programmes->the_post();?>
						<h3><?php the_title(); ?></h3>
						<div><?php the_content(); ?></div>

					<?php endwhile; ?>
				<?php endif; ?>

                </div>

                <div class="col-md-4 col-xs-12">


                        <?php
                                $parms = array(
                                'type'=>'post',
                                'category_name'=>'super-fast'
                            );
                            $programmes = new WP_Query($parms);
                         ?>

                <?php if($programmes->have_posts()): ?>
                    <?php while($programmes->have_posts()): $programmes->the_post();?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php the_content(); ?></div>

                    <?php endwhile; ?>
                <?php endif; ?>

                </div>

                <div class="col-md-4 col-xs-12">


                        <?php
                                $parms = array(
                                'type'=>'post',
                                'category_name'=>'no-logs'
                            );
                            $programmes = new WP_Query($parms);
                         ?>

                <?php if($programmes->have_posts()): ?>
                    <?php while($programmes->have_posts()): $programmes->the_post();?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php the_content(); ?></div>

                    <?php endwhile; ?>
                <?php endif; ?>

                </div>
			</div>
        <div class="why-vpn-content-2">


            <div class="row">
                <div class="col-md-6 col-xs-12">


                        <?php
                                $parms = array(
                                'type'=>'post',
                                'category_name'=>'easy-vpn'
                            );
                            $programmes = new WP_Query($parms);
                         ?>

                <?php if($programmes->have_posts()): ?>
                    <?php while($programmes->have_posts()): $programmes->the_post();?>
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
                            $programmes = new WP_Query($parms);
                         ?>

                <?php if($programmes->have_posts()): ?>
                    <?php while($programmes->have_posts()): $programmes->the_post();?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php the_content(); ?></div>

                    <?php endwhile; ?>
                <?php endif; ?>

                </div>
            </div>
        </div>

        </div>



		 <!-- <div class="row">



				<?php if($programmes->have_posts()): ?>
					<?php while($programmes->have_posts()): $programmes->the_post();?>
                        <div class=" catagories">

    						<h3><?php the_title(); ?></h3>
                            <div <?php  the_post_thumbnail('board-game-thumbnail') ?> >  </div>
    						<div class="game-thumbnails"><?php the_content(); ?></div>

                        </div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div> -->





		</div>
	</div>






</div>

	</div>



</div>


<div class="what-people-saying">

<div class="col-md-10 offset-md-1">


    <div class="row">
        <div class="col-md-4 col-xs-12">


                <?php
                        $parms = array(
                        'type'=>'post',
                        'category_name'=>'forbes'
                    );
                    $programmes = new WP_Query($parms);
                 ?>

        <?php if($programmes->have_posts()): ?>
            <?php while($programmes->have_posts()): $programmes->the_post();?>
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
                    $programmes = new WP_Query($parms);
                 ?>

        <?php if($programmes->have_posts()): ?>
            <?php while($programmes->have_posts()): $programmes->the_post();?>
                <h3><?php the_title(); ?></h3>
                <div><?php the_content(); ?></div>

            <?php endwhile; ?>
        <?php endif; ?>

        </div>

        <div class="col-md-4 col-xs-12">


                <?php
                        $parms = array(
                        'type'=>'post',
                        'category_name'=>'wsr'
                    );
                    $programmes = new WP_Query($parms);
                 ?>

        <?php if($programmes->have_posts()): ?>
            <?php while($programmes->have_posts()): $programmes->the_post();?>
                <h3><?php the_title(); ?></h3>
                <div><?php the_content(); ?></div>

            <?php endwhile; ?>
        <?php endif; ?>

        </div>
    </div>
</div>
</div>


<?php get_footer() ?>
