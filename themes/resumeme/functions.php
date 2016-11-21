<?php

// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

//Remove Admin Bar
require_once('library/admin-bar.php');

//Options Panel
$themename = "My Resume";
$shortname = "re";
$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Choose a category");
$options = array (
  
array( "name" => $themename." Options",
    "type" => "title"),
 
array( "name" => "General",
    "type" => "section"),
array( "type" => "open"),
  
array( "name" => "Color Scheme",
    "desc" => "Select the color scheme for the theme",
    "id" => $shortname."_color_scheme",
    "type" => "select",
    "options" => array("blue", "cool", "contrast", "green", "purple", "red"),
    "std" => "blue"),

array( "name" => "Font Scheme",
    "desc" => "Select a font scheme for the theme",
    "id" => $shortname."_fonts",
    "type" => "select",
    "options" => array("lato", "opensans", "proximanova", "ubuntu", "vollkorn"),
    "std" => "opensans"),

array( "type" => "close"),
array( "name" => "About Me",
    "type" => "section"),
array( "type" => "open"),

array( "name" => "About Me",
    "desc" => "Type a brief bio of yourself",
    "id" => $shortname."_about_me",
    "type" => "textarea",
    "std" => "Vivamus fermentum semper porta. Nunc diam velit, adipiscing ut tristique vitae, sagittis vel odio. Maecenas convallis ullamcorper ultricies."),
     
array( "name" => "Logo URL",
    "desc" => "Enter the link to your logo image",
    "id" => $shortname."_logo",
    "type" => "text",
    "std" => "http://resumeme.nathansumner.com/wp-content/themes/resumeme/img/resumeme-logo.png"),

array( "name" => "Profile Image URL",
    "desc" => "Enter the link to your profile image",
    "id" => $shortname."_profile",
    "type" => "text",
    "std" => "http://resumeme.nathansumner.com/wp-content/themes/resumeme/img/user.png"),    

array( "name" => "Name",
    "desc" => "Type your full name here.",
    "id" => $shortname."_name",
    "type" => "text",
    "std" => "Name Here"),

array( "name" => "Address",
    "desc" => "Type your address here.",
    "id" => $shortname."_address",
    "type" => "text",
    "std" => "Full Address Here"),
	
array( "name" => "Phone",
    "desc" => "Type your phone number here.",
    "id" => $shortname."_phone",
    "type" => "text",
    "std" => "Phone Number Here"),
	
array( "name" => "Email",
    "desc" => "Type your email address here.",
    "id" => $shortname."_email",
    "type" => "text",
    "std" => "Email Address Here"),
    
array( "type" => "close"),
array( "name" => "Social Media",
    "type" => "section"),
array( "type" => "open"),

array( "name" => "Facebook",
    "desc" => "Enter your Facebook URL if you have one.",
    "id" => $shortname."_facebook",
    "type" => "text",
    "std" => "Enter your Facebook URL Here"),

array( "name" => "Twitter",
    "desc" => "Enter your Twitter URL if you have one.",
    "id" => $shortname."_twitter",
    "type" => "text",
    "std" => "Enter your Twitter URL Here"),

array( "name" => "LinkedIn",
    "desc" => "Enter your LinkedIn URL if you have one.",
    "id" => $shortname."_linkedin",
    "type" => "text",
    "std" => "Enter your LinkedIn URL Here"),

array( "name" => "Pinterest",
    "desc" => "Enter your Pinterest URL if you have one.",
    "id" => $shortname."_pinterest",
    "type" => "text",
    "std" => "Enter your Pinterest URL Here"),

array( "type" => "close"),
array( "name" => "Employment History",
    "type" => "section"),
array( "type" => "open"),

array( "name" => "Objective",
    "desc" => "Type your objective here.",
    "id" => $shortname."_objective",
    "type" => "text",
    "std" => "Suspendisse lectus leo, consectetur in tempor sit amet, placerat quis neque. Etiam luctus porttitor lorem, sed suscipit est rutrum non."),

array( "name" => "Most Recent Company Job Title",
    "desc" => "Type your most recent company job title here.",
    "id" => $shortname."_recent_job_title",
    "type" => "text",
    "std" => "Most Recent Job Title"),

array( "name" => "Most Recent Company Name",
    "desc" => "Type your company name here.",
    "id" => $shortname."_recent_company_name",
    "type" => "text",
    "std" => "Company ABC"),

array( "name" => "Most Recent Job Dates",
    "desc" => "Type your most recent job dates here.",
    "id" => $shortname."_recent_job_dates",
    "type" => "text",
    "std" => "2007 - Present"),

array( "name" => "Most Recent Job Duties",
    "desc" => "Type your most recent job duties here.",
    "id" => $shortname."_recent_job_duties",
    "type" => "text",
    "std" => "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In euismod ultrices facilisis. Vestibulum porta sapien adipiscing augue congue id pretium lectus molestie. Proin quis dictum nisl. Morbi id quam sapien, sed vestibulum sem."),

array( "name" => "Second Company Job Title",
    "desc" => "Type second job title here.",
    "id" => $shortname."_second_job_title",
    "type" => "text",
    "std" => "Second Job Title"),

array( "name" => "Second Company Name",
    "desc" => "Type your second company here.",
    "id" => $shortname."_second_company_name",
    "type" => "text",
    "std" => "Company 123"),

array( "name" => "Second Company Job Dates",
    "desc" => "Type your second company job dates here.",
    "id" => $shortname."_second_job_dates",
    "type" => "text",
    "std" => "2002 - 2007"),

array( "name" => "Second Company Job Duties",
    "desc" => "Type your second company job duties here.",
    "id" => $shortname."_second_job_duties",
    "type" => "text",
    "std" => "Suspendisse lectus leo, consectetur in tempor sit amet, placerat quis neque. Etiam luctus porttitor lorem, sed suscipit est rutrum non."),

array( "type" => "close"),
array( "name" => "Skills",
    "type" => "section"),
array( "type" => "open"),

array( "name" => "Skill 1",
    "desc" => "Type your 1st skill here.",
    "id" => $shortname."_skill_1",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 1 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_1_level",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 2",
    "desc" => "Type your 2nd skill here.",
    "id" => $shortname."_skill_2",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 2 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_2_level",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 3",
    "desc" => "Type your 3rd skill here.",
    "id" => $shortname."_skill_3",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 3 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_3_level",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 4",
    "desc" => "Type your 4th skill here.",
    "id" => $shortname."_skill_4",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 4 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_4_level",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 5",
    "desc" => "Type your 5th skill here.",
    "id" => $shortname."_skill_5",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 5 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_5_level",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 6",
    "desc" => "Type your 6th skill here.",
    "id" => $shortname."_skill_6",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 6 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_6_level",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 7",
    "desc" => "Type your 7th skill here.",
    "id" => $shortname."_skill_7",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 7 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_7_level",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 8",
    "desc" => "Type your 8th skill here.",
    "id" => $shortname."_skill_8",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 8 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_8_level",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 9",
    "desc" => "Type your 9th skill here.",
    "id" => $shortname."_skill_9",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 9 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_9_level",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 10",
    "desc" => "Type your 10th skill here.",
    "id" => $shortname."_skill_10",
    "type" => "text",
    "std" => ""),

array( "name" => "Skill 10 Level",
    "desc" => "Type the percent (number only) you are proficient in this skill.",
    "id" => $shortname."_skill_10_level",
    "type" => "text",
    "std" => ""),

array( "type" => "close"),
array( "name" => "Education",
    "type" => "section"),
array( "type" => "open"),

array( "name" => "First School Degree Name",
    "desc" => "Type your first school's degree name here.",
    "id" => $shortname."_school_one_degree",
    "type" => "text",
    "std" => "Master of Business Administration"),

array( "name" => "First School Name",
    "desc" => "Type your first school's name here.",
    "id" => $shortname."_school_one_name",
    "type" => "text",
    "std" => "University of Central Florida"),

array( "name" => "First School Dates of Attendance",
    "desc" => "Type first school's dates of attendance here.",
    "id" => $shortname."_school_one_dates",
    "type" => "text",
    "std" => "2007 - 2009"),

array( "name" => "First School Notes",
    "desc" => "Type your first school's notes here.",
    "id" => $shortname."_school_one_notes",
    "type" => "text",
    "std" => "Suspendisse lectus leo, consectetur in tempor sit amet, placerat quis neque. Etiam luctus porttitor lorem, sed suscipit est rutrum non.."),

array( "name" => "Second School Degree Name",
    "desc" => "Type your second school's degree name here.",
    "id" => $shortname."_school_two_degree",
    "type" => "text",
    "std" => "Bachelor of Science: Information Systems"),

array( "name" => "Second School Name",
    "desc" => "Type your second school's name here.",
    "id" => $shortname."_school_two_name",
    "type" => "text",
    "std" => "University of Florida"),

array( "name" => "Second School Dates of Attendance",
    "desc" => "Type second school's dates of attendance here.",
    "id" => $shortname."_school_two_dates",
    "type" => "text",
    "std" => "1998 - 2002"),

array( "name" => "Second School Notes",
    "desc" => "Type your second school's notes here.",
    "id" => $shortname."_school_two_notes",
    "type" => "text",
    "std" => "Suspendisse lectus leo, consectetur in tempor sit amet, placerat quis neque. Etiam luctus porttitor lorem, sed suscipit est rutrum non."),

array( "type" => "close"),
array( "name" => "Misc","type" => "section"),
array( "type" => "open"),

array( "name" => "Custom CSS",
    "desc" => "Want to add any custom CSS code? Put in here, and the rest is taken care of. This overrides any other stylesheets. eg: a.button{color:green}",
    "id" => $shortname."_custom_css",
    "type" => "textarea",
    "std" => ""),       
          
array( "name" => "Google Analytics Code",
    "desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.",
    "id" => $shortname."_ga_code",
    "type" => "textarea",
    "std" => ""),   
     
array( "name" => "Custom Favicon",
    "desc" => "A favicon is a 16x16 pixel icon that represents your site; paste the URL to a .ico image that you want to use as the image",
    "id" => $shortname."_favicon",
    "type" => "text",
    "std" => get_bloginfo('url') ."/favicon.ico"),  
     
array( "name" => "Feedburner URL",
    "desc" => "Feedburner is a Google service that takes care of your RSS feed. Paste your Feedburner URL here to let readers see it in your website",
    "id" => $shortname."_feedburner",
    "type" => "text",
    "std" => get_bloginfo('rss2_url')),
  
array( "type" => "close")
  
);

function mytheme_add_admin() {
    global $themename, $shortname, $options;
    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
            update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
    foreach ($options as $value) {
        if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
        header("Location: admin.php?page=functions.php&saved=true");
    die;
    }
    else if( 'reset' == $_REQUEST['action'] ) {
        foreach ($options as $value) {
            delete_option( $value['id'] ); }
        header("Location: admin.php?page=functions.php&reset=true");
        die;
        }
    }
    add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}
 
function mytheme_add_init() {
    $file_dir=get_bloginfo('template_directory');
    wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
    wp_enqueue_script("rm_script", $file_dir."/functions/rm_script.js", false, "1.0");
}

function mytheme_admin() {
    global $themename, $shortname, $options;
    $i=0;
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    ?>
    <div class="wrap rm_wrap">
    	<h2><?php echo $themename; ?> Settings</h2>
        <div class="rm_opts">
        	<form method="post">
    			<?php foreach ($options as $value) {
    				switch ( $value['type'] ) {
    					case "open":
    			?>
    			<?php break;
    				case "close":
    			?>
        </div>
    </div>
    <br />
    <?php break;
    case "title":
    ?>
    <p>To easily use the <?php echo $themename;?> theme, you can use the menu below.</p>
    <?php break;
    case 'text':
    ?>
    <div class="rm_input rm_text">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
     <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
     </div>
    <?php
    break;
    case 'textarea':
    ?>
    <div class="rm_input rm_textarea">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
        <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
     <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
     </div>
    <?php
    break;
    case 'select':
    ?>
    <div class="rm_input rm_select">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
        <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
            <?php foreach ($value['options'] as $option) { ?>
            <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
        </select>
        <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
    </div>
    <?php
    break;
    case "checkbox":
    ?>
    <div class="rm_input rm_checkbox">
        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
        <?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
        <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
        </div>
    <?php break;
    case "section":
    $i++;
    ?>
    <div class="rm_section">
    	<div class="rm_title">
        	<h3><img src="<?php bloginfo('template_directory')?>/functions/images/trans.png" class="inactive" alt=""><?php echo $value['name']; ?></h3>
            <span class="submit">
                <input name="save<?php echo $i; ?>" type="submit" value="Save changes" class="button button-primary" />
            </span>
            <div class="clearfix"></div>
        </div>
        <div class="rm_options">
    	<?php break;
    		}
    		}
    	?>
        <input type="hidden" name="action" value="save" />
    </form>
    <form method="post">
        <p class="submit">
        	<input name="reset" type="submit" value="Reset" class="button button-primary" />
            <input type="hidden" name="action" value="reset" />
        </p>
    </form>
</div>
    <?php
}
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');

?>