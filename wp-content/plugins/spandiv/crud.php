<?php
/*
Plugin Name: Spandiv
Plugin URI: https://spandiv.xyz/
Description: Custom Wordpress Features.
Version: 1.0.0
Author: Isna Prasetyo
Author URI: https://spandiv.xyz/
License: GPL2
*/
register_activation_hook( __FILE__, 'crudOperationsTable');
function crudOperationsTable() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_settings = $wpdb->prefix . 'spandiv';

  $sql_1 = "CREATE TABLE `$table_settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(220) DEFAULT NULL,
  `telephone` varchar(220) DEFAULT NULL,
  `message` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL,
  `facebook` varchar(220) DEFAULT NULL,
  `twitter` varchar(220) DEFAULT NULL,
  `instagram` varchar(220) DEFAULT NULL,
  `youtube` varchar(220) DEFAULT NULL,
  `about` varchar(320) DEFAULT NULL,
  `maps` varchar(220) DEFAULT NULL,
  PRIMARY KEY(settings_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_settings'") != $table_settings) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql_1);
  }
}

add_action('admin_menu', 'addAdminPageContent');
function addAdminPageContent() {
  add_menu_page('Spandiv', 'Spandiv', 'manage_options' ,__FILE__, 'crudAdminPage', 'https://raw.githubusercontent.com/praseetyaa/spandiv/main/wp-content/plugins/spandiv/assets/icon.png');
}

function crudAdminPage() {
  global $wpdb;
  $table_settings = $wpdb->prefix . 'spandiv';
  if (isset($_POST['newsubmit_settings'])) {
    $s_address = $_POST['newaddress'];
    $s_telephone = $_POST['newtelephone'];
    $s_message = $_POST['newmessage'];
    $s_email = $_POST['newemail'];
    $s_facebook = $_POST['facebook'];
    $s_twitter = $_POST['twitter'];
    $s_instagram = $_POST['instagram'];
    $s_youtube = $_POST['youtube'];
    $s_about = $_POST['about'];
    $s_maps = $_POST['maps'];
    $wpdb->query("INSERT INTO $table_settings(address,telephone,message,email,facebook,twitter,instagram,youtube,about,maps) VALUES('$s_address','$s_telephone','$s_message','$s_email','$s_facebook','$s_twitter','$s_instagram','$s_youtube','$s_about','$s_maps')");
    echo "<script>location.replace('admin.php?page=spandiv%2Fcrud.php');</script>";
  }
  if (isset($_POST['uptsubmit_settings'])) {
    $s_address = $_POST['uptaddress'];
    $s_telephone = $_POST['upttelephone'];
    $s_message = $_POST['uptmessage'];
    $s_email = $_POST['uptemail'];
    $s_facebook = $_POST['uptfacebook'];
    $s_twitter = $_POST['upttwitter'];
    $s_instagram = $_POST['uptinstagram'];
    $s_youtube = $_POST['uptyoutube'];
    $s_about = $_POST['uptabout'];
    $s_maps = $_POST['uptmaps'];
    $wpdb->query("UPDATE $table_settings SET address='$s_address',telephone='$s_telephone',message='$s_message',email='$s_email',facebook='$s_facebook',twitter='$s_twitter',instagram='$s_instagram',youtube='$s_youtube',about='$s_about',maps='$s_maps' ");
    echo "<script>location.replace('admin.php?page=spandiv%2Fcrud.php');</script>";
  }

?>

  <div class="wrap">
    <h2>Footer Content</h2>
    <table class="wp-list-table widefat striped">
      <thead>
        <tr>
          <th hidden></th>
          <th>Name</th>
          <th>Content</th>
        </tr>
      </thead>
      <form action="" method="post">

      <?php
        $result = $wpdb->get_results("SELECT * FROM $table_settings");
        foreach($result as $print) { ?>

        <tbody>
          <tr>
            <td hidden><input type="text" id="uptSettingsId" name="uptSettingsId" value="<?= "$print->settings_id" ?>" disabled></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><textarea style="width: -webkit-fill-available;" rows="3" type="text" id="uptaddress" name="uptaddress"><?= "$print->address" ?></textarea><br><span>Shortcode: [a_address]</span></td>
          </tr>
          <tr style="background-color: #ff2146"><td style="color: #fff"><b>Contact</b></td><td></td></tr>
          <tr>
            <td>Telephone</td>
            <td><input style="width: -webkit-fill-available;" type="text" id="upttelephone" name="upttelephone" value="<?= "$print->telephone" ?>"><br><span>Shortcode: [a_phone]</span></td>
          </tr>
          <tr>
            <td>Message</td>
            <td><textarea style="width: -webkit-fill-available;" type="text" id="uptmessage" name="uptmessage" rows="3"><?= "$print->message" ?></textarea><br><span>Shortcode: [a_message]</span></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input style="width: -webkit-fill-available;" type="text" id="uptemail" name="uptemail" value="<?= "$print->email" ?>"><br><span>Shortcode: [a_email]</span></td>
          </tr>
          <tr style="background-color: #ff2146"><td style="color: #fff"><b>Social Media</b></td><td></td></tr>
          <tr>
            <td>Facebook</td>
            <td><input style="width: -webkit-fill-available;" type="text" id="uptfacebook" name="uptfacebook" value="<?= "$print->facebook" ?>"><br><span>Shortcode: [a_facebook]</span></td>
          </tr>
          <tr>
            <td>Twitter</td>
            <td><input style="width: -webkit-fill-available;" type="text" id="upttwitter" name="upttwitter" value="<?= "$print->twitter" ?>"><br><span>Shortcode: [a_twitter]</span></td>
          </tr>
          <tr>
            <td>Instagram</td>
            <td><input style="width: -webkit-fill-available;" type="text" id="uptinstagram" name="uptinstagram" value="<?= "$print->instagram" ?>"><br><span>Shortcode: [a_instagram]</span></td>
          </tr>
          <tr>
            <td>Youtube</td>
            <td><input style="width: -webkit-fill-available;" type="text" id="uptyoutube" name="uptyoutube" value="<?= "$print->youtube" ?>"><br><span>Shortcode: [a_youtube]</span></td>
          </tr>
          <tr style="background-color: #ff2146"><td style="color: #fff"><b>About Us</b></td><td></td></tr>
          <tr>
            <td>About</td>
            <td><label for="uptabout">Max.600 Character</label><textarea style="width: -webkit-fill-available;" type="text" id="uptabout" name="uptabout" rows="4"><?= "$print->about" ?></textarea><br><span>Shortcode: [a_about]</span></td>
          </tr>
          <tr>
            <td>Google Maps Embed</td>
            <td><textarea style="width: -webkit-fill-available;" type="text" id="uptmaps" name="uptmaps" rows="3"><?= "$print->maps" ?></textarea><br><span>Shortcode: [a_maps]</span></td>
          </tr>
        </tbody>

        <?php } ?>

        <tfoot>
          <tr>  
            <td></td>
            <td><button type="submit" name="uptsubmit_settings" id="uptsubmit_settings" style="float: right; background-color: #ff2146; color: #fff; padding: .5rem 1.5rem; border-color: #ff2146; border-radius: 2rem; font-weight: bold; cursor: pointer;">Save</button></td>
          </tr>
        </tfoot>
      </form>  
    </table>
  </div>

  <?php
}

// shortcode

function get_data_setting() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_settings = $wpdb->prefix . 'spandiv';
  $result = $wpdb->get_results("SELECT * FROM $table_settings");

  return $result;
}

function address($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->address";
    
  }
}

function phone($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->telephone";
    
  }
}

function message($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->message";
    
  }
}

function email($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->email";
    
  }
}

function facebook($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->facebook";
    
  }
}

function twitter($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->twitter";
    
  }
}

function instagram($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->instagram";
    
  }
}

function youtube($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->youtube";
    
  }
}

function about($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->about";
    
  }
}

function maps($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->maps";
    
  }
}

add_shortcode('a_address', 'address');
add_shortcode('a_phone', 'phone');
add_shortcode('a_message', 'message');
add_shortcode('a_email', 'email');
add_shortcode('a_facebook', 'facebook');
add_shortcode('a_twitter', 'twitter');
add_shortcode('a_instagram', 'instagram');
add_shortcode('a_youtube', 'youtube');
add_shortcode('a_about', 'about');
add_shortcode('a_maps', 'maps');

?>