<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='alert-box success radius'>{$message}<a href='#' class='close'>&times;</a></div>";
    else $response = "<div class='alert-box alert round'>{$message}<a href='#' class='close'>&times;</a></div>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>
<?php
/*fc
Template Name: Resume
*/
get_header(); ?>
    <div id="about-me">
        <div class="row">
            <div class="large-12 columns" role="content">
                <article>
                    <h2><i class="fa fa-user"></i> About Me</h2>
                    <div class="large-9 columns">
                    	<p><?php echo stripslashes(get_option('re_about_me')); ?></p>
                    </div>
                    <div class="row">
                    	<div class="large-4 columns" role="content">
                        	<img src="<?php echo stripslashes(get_option('re_profile')); ?>"/>
                        </div>
                        <div class="large-8 columns" role="content">
                        	<header>
                            	<div class="row">
                                	<div class="large-3 columns" role="content">
                                    	<p>Name</p>
                                    </div>
                                    <div class="large-9 columns" role="content">
                                    	<p><?php echo stripslashes(get_option('re_name')); ?></p>
                                    </div>
                            	</div>
                            </header>
                            <header>
                            	<div class="row">
                                	<div class="large-3 columns" role="content">
                                    	<p>Address</p>
                                    </div>
                                    <div class="large-9 columns" role="content">
                                    	<p><?php echo stripslashes(get_option('re_address')); ?></p>
                                    </div>
                            	</div>
                            </header>
                            <header>
                            	<div class="row">
                                	<div class="large-3 columns" role="content">
                                    	<p>Phone</p>
                                    </div>
                                    <div class="large-9 columns" role="content">
                                    	<p><?php echo stripslashes(get_option('re_phone')); ?></p>
                                    </div>
                            	</div>
                            </header>
                            <header>
                            	<div class="row">
                                	<div class="large-3 columns" role="content">
                                    	<p>Email</p>
                                    </div>
                                    <div class="large-9 columns" role="content">
                                    	<p><?php echo stripslashes(get_option('re_email')); ?></p>
                                    </div>
                            	</div>
                            </header>
                            <header>
                            	<div class="row">
                                	<div class="large-3 columns" role="content">
                                    	<p>Social</p>
                                    </div>
                                    <div class="large-9 columns" role="content">
                                    	<ul class="social">
                                        	<li>
												<?php if ( get_option('re_facebook') !='' ) {?>
                                            	<a href="<?php echo get_option('re_facebook'); ?>" title="Follow me on Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
												<?php } else {?>
												<?php }?>
                                            </li>
                                            <li>
												<?php if ( get_option('re_twitter') !='' ) {?>
                                            	<a href="<?php echo get_option('re_twitter'); ?>" title="Follow me on Twitter" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
												<?php } else {?>
												<?php }?>
                                            </li>
                                            <li>
												<?php if ( get_option('re_linkedin') !='' ) {?>
                                            	<a href="<?php echo get_option('re_linkedin'); ?>" title="Follow me on LinkedIn" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
												<?php } else {?>
												<?php }?>
                                            </li>
                                            <li>
												<?php if ( get_option('re_pinterest') !='' ) {?>
                                            	<a href="<?php echo get_option('re_pinterest'); ?>" title="Follow me on Pinterest" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a>
												<?php } else {?>
												<?php }?>
                                            </li>
                                        </ul>
                                    </div>
                            	</div>
                            </header>
                        </div>
                    </div>
                </article>
            </div><!-- End .large-12 columns-->
        </div><!-- End .row -->
    </div><!-- End #about-me -->
    <div id="professional-experience">
        <div class="row">
            <div class="large-12 columns" role="content">
                <article>
                    <h2><i class="fa fa-folder"></i> Professional Experience</h2>
                    <div class="row">
                        <div class="large-9 columns">
                            <p><?php echo stripslashes(get_option('re_objective')); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-9 columns">
                            <header>
                                <h3><i class="fa fa-briefcase"></i> Employment</h3> 
                            </header>
                            <div class="row">
                            	<div class="large-6 columns">
                            		<h4><?php echo stripslashes(get_option('re_recent_job_title')); ?></h4>
                                </div>
                                <div class="large-6 columns">
                                	<h4 align="right"><?php echo stripslashes(get_option('re_recent_company_name')); ?></h4>
                                </div>
                            </div>
                            <em><?php echo stripslashes(get_option('re_recent_job_dates')); ?></em>
                            <p><?php echo stripslashes(get_option('re_recent_job_duties')); ?></p>
                            <div class="row">
                            	<div class="large-6 columns">
                            		<h4><?php echo stripslashes(get_option('re_second_job_title')); ?></h4>
                                </div>
                                <div class="large-6 columns">
                                	<h4 align="right"><?php echo stripslashes(get_option('re_second_company_name')); ?></h4>
                                </div>
                            </div>
                            <em><?php echo stripslashes(get_option('re_second_job_dates')); ?></em>
                            <p><?php echo stripslashes(get_option('re_second_job_duties')); ?></p>
                            <header>
                                <h3><i class="fa fa-graduation-cap "></i> Education</h3> 
                            </header>
                            <div class="row">
                            	<div class="large-6 columns">
                            		<h4><?php echo stripslashes(get_option('re_school_one_degree')); ?></h4>
                                </div>
                                <div class="large-6 columns">
                                	<h4 align="right"><?php echo stripslashes(get_option('re_school_one_name')); ?></h4>
                                </div>
                            </div>
                            <em><?php echo stripslashes(get_option('re_school_one_dates')); ?></em>
                            <p><?php echo stripslashes(get_option('re_school_one_notes')); ?></p>
                            <div class="row">
                            	<div class="large-6 columns">
                            		<h4><?php echo stripslashes(get_option('re_school_two_degree')); ?></h4>
                                </div>
                                <div class="large-6 columns">
                                	<h4 align="right"><?php echo stripslashes(get_option('re_school_two_name')); ?></h4>
                                </div>
                            </div>
                            <em><?php echo stripslashes(get_option('re_school_two_dates')); ?></em>
                            <p><?php echo stripslashes(get_option('re_school_two_notes')); ?></p>
                        </div>
                        <div class="large-3 columns">
                        	<h4>Professional Skills</h4>
                            <div class="progress large-12" id="margin">
                            	<?php if ( get_option('re_skill_1') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_1_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_1')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                            <div class="progress large-12" id="margin">
                                <?php if ( get_option('re_skill_2') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_2_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_2')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                            <div class="progress large-12">
                                <?php if ( get_option('re_skill_3') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_3_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_3')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                            <div class="progress large-12">
                                <?php if ( get_option('re_skill_4') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_4_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_4')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                            <div class="progress large-12">
                                <?php if ( get_option('re_skill_5') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_5_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_5')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                            <div class="progress large-12">
                                <?php if ( get_option('re_skill_6') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_6_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_6')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                            <div class="progress large-12">
                                <?php if ( get_option('re_skill_7') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_7_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_7')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                            <div class="progress large-12">
                                <?php if ( get_option('re_skill_8') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_8_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_8')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                            <div class="progress large-12">
                                <?php if ( get_option('re_skill_9') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_9_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_9')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                            <div class="progress large-12">
                                <?php if ( get_option('re_skill_10') !='' ) {?>
                                <span class="meter" style="width: <?php echo stripslashes(get_option('re_skill_10_level')); ?>%;"><?php echo stripslashes(get_option('re_skill_10')); ?></span>
                                <?php } else {?>
								<?php }?>
                            </div>
                        </div>
                    </div>
                </article>
            </div><!-- End .large-12 columns-->
        </div><!-- End .row -->
    </div><!-- End #professional-experience -->
    <div id="contact">
        <div class="row">
            <div class="large-12 columns" role="content">
                <article>
                    <h2><i class="fa fa-mobile"></i> Contact</h2>
                    <div class="large-6 columns">
                    	<p>Drop me a line using contact form below.</p>
                        <header style="border:none;">
                            <h3><i class="fa fa-newspaper-o"></i> Contact Info</h3> 
                        </header>
                        <header>
                            <div class="row">
                                <div class="large-3 columns" role="content">
                                    <p>Address</p>
                                </div>
                                <div class="large-9 columns" role="content">
                                    <p><?php echo stripslashes(get_option('re_address')); ?></p>
                                </div>
                            </div>
                        </header>
                        <header>
                            <div class="row">
                                <div class="large-3 columns" role="content">
                                    <p>Phone</p>
                                </div>
                                <div class="large-9 columns" role="content">
                                    <p><?php echo stripslashes(get_option('re_phone')); ?></p>
                                </div>
                            </div>
                        </header>
                        <header>
                            <div class="row">
                                <div class="large-3 columns" role="content">
                                    <p>Email</p>
                                </div>
                                <div class="large-9 columns" role="content">
                                    <p><?php echo stripslashes(get_option('re_email')); ?></p>
                                </div>
                            </div>
                        </header>
                    </div>
                    <div class="large-6 columns">
                    	<div id="respond">
							<?php echo $response; ?>
                            <form action="<?php the_permalink(); ?>" method="post">
                                <label for="name">Name</label>
                                <input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
                                <label for="message_email">Email</label>
                                <input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
                                <label>Message</label>
                                <textarea type="text" name="message_text" rows="4"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                                <label for="message_human">Human Verification: _ + 3 = 5</label>
                                <input type="text" name="message_human">
                                <input type="hidden" name="submitted" value="1">
                                <button type="submit" class="button">Send</button>
                            </form>
                        </div>
                    </div>
                </article>
            </div><!-- End .large-12 columns-->
        </div><!-- End .row -->
    </div><!-- End .contact -->
<?php get_footer(); ?>