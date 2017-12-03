<!-- about.php -->

<?php get_header(); ?>


<div class="row">
	<div class="content">




            <?php
					$parms = array(
					'type'=>'post',
					'category_name'=>'about-content'
				);
				$programmes = new WP_Query($parms);
			 ?>
			<div class="row">
                <div class="col-xs-12">

                    <div class="max">


				<?php if($programmes->have_posts()): ?>
					<?php while($programmes->have_posts()): $programmes->the_post();?>
						<h3><?php the_title(); ?></h3>
						<div><?php the_content(); ?></div>

					<?php endwhile; ?>
				<?php endif; ?>
                </div>
                </div>
			</div>


            <?php
					$parms = array(
					'type'=>'post',
					'category_name'=>'board-game-catagory'
				);
				$programmes = new WP_Query($parms);
			 ?>
			<div class="row">



				<?php if($programmes->have_posts()): ?>
					<?php while($programmes->have_posts()): $programmes->the_post();?>
                        <div class=" catagories">

    						<h3><?php the_title(); ?></h3>
                            <div <?php  the_post_thumbnail('board-game-thumbnail') ?> >  </div>
    						<div class="game-thumbnails"><?php the_content(); ?></div>

                        </div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>


		</div>
	</div>


<?php get_footer() ?>
