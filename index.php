
  define('DIVI_USER_FOLDER_PATH', plugin_dir_path(__FILE__));
  if (isset($_POST['submit_file'])) {

      $site_url = site_url();

      $file_name = $_FILES['file_send']['name'];
      $file_type = $_FILES['file_send']['type'];
      $tmp_name = $_FILES['file_send']['tmp_name'];


      $allowed_file_type = ['pdf', 'png', 'jpg'];
      $file_ex = explode('.', $file_name);
      $file_format = end($file_ex);

      // echo "<pre>";
      // echo "<br>";
      if (in_array($file_format, $allowed_file_type)) {
          $unique_file_name =  rand(1111,  9999) . time() . '-' . $file_name;

          move_uploaded_file($tmp_name, DIVI_USER_FOLDER_PATH . "inc/users/files/" . $unique_file_name);

          $file_url = $site_url . '/wp-content/themes/Divi/inc/users/files/' . $unique_file_name;
      }
  }
