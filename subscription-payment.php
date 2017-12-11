<?php
	/*
		Template Name: Subscription Payment
	*/
 ?>
 <?php get_header(); ?>



 <div class="payment-container" >


     <?php
             $parms2 = array(
             'post_type'=>'services',
         );
         $VPN = new WP_Query($parms2);?>
     <?php if($VPN->have_posts()): ?>
     <?php while($VPN->have_posts()): $VPN->the_post();?>

     <?php endwhile; ?>
     <?php endif; ?>
     <div class="testing">
          <?php echo get_post_meta( $post->ID, 'billingConditions', true ); echo $my_meta["billingConditions"]; ?>
     </div>

                    <form class="credit-card">
                      <div class="form-header">
                        <h4 class="title">Credit card details</h4>
                      </div>

                      <div class="form-body">
                        <!-- Card Number -->
                        <input type="text" class="card-number" placeholder="Card Number">

                        <!-- Date Field -->
                        <div class="date-field">
                          <div class="month">
                            <select name="Month">
                              <option value="january">January</option>
                              <option value="february">February</option>
                              <option value="march">March</option>
                              <option value="april">April</option>
                              <option value="may">May</option>
                              <option value="june">June</option>
                              <option value="july">July</option>
                              <option value="august">August</option>
                              <option value="september">September</option>
                              <option value="october">October</option>
                              <option value="november">November</option>
                              <option value="december">December</option>
                            </select>
                          </div>
                          <div class="year">
                            <select name="Year">
                              <option value="2017">2017</option>
                              <option value="2018">2018</option>
                              <option value="2019">2019</option>
                              <option value="2020">2020</option>
                              <option value="2021">2021</option>
                              <option value="2022">2022</option>
                              <option value="2023">2023</option>
                              <option value="2024">2024</option>
                            </select>
                          </div>
                        </div>

                        <!-- Card Verification Field -->
                        <div class="card-verification">
                          <div class="cvv-input">
                            <input type="text" placeholder="CVV">
                          </div>
                          <div class="cvv-details">
                            <p>3 or 4 digits usually found <br> on the signature strip</p>
                          </div>
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="proceed-btn" id="proceed" ><a href="#">Proceed</a></button>
                      </div>
                    </form>

        <div id="payment-success">
            <h3>Payment Successful!</h3>
            <div class="btn btn-primary">
                <a href="http://192.168.33.10/wordpress/">  <h4>Go back to home page</h4> </a>
            </div>
        </div>

 </div>



 <?php get_footer() ?>
