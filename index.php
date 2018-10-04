<?php
if (isset($_POST["g-recaptcha-response"])) {
   
    $sender_name = stripslashes($_POST["sender_name"]);
    $sender_email = stripslashes($_POST["sender_email"]);
    $sender_message = stripslashes($_POST["sender_message"]);
//  $response = isset($_POST["g-recaptcha-response"]);
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'response' => $_POST["g-recaptcha-response"],
    );
    $options = array(
        'http' => array (
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
            'verify_peer' => true,
        ),
    );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    //echo $verify;
    $captcha_success=json_decode($verify);
    if ($captcha_success->success==false) {
        echo "<p>You are a bot! Go away!</p>";
    } else if ($captcha_success->success==true) {
        echo "<p>You are not a bot!</p>";
//echo "<script>enableBtn()</script>";
    }
}
?>
<form action="?" method="post" enctype="multipart/form-data">
 
    <input name="sender_name" placeholder="Your Name..."/>
    <input name="sender_email" placeholder="Your email..."/>
    <br>
    <textarea placeholder="Your Message..." name="sender_message"></textarea>
        <div class="captcha_wrapper">
        <div class="g-recaptcha" data-sitekey="6LcsR3MUAAAAADDsTucBB2CWPRoSv93M_RsEjTK7" ></div>
    </div>
          <script type="text/javascript"
          src="https://www.google.com/recaptcha/api.js?hl=zh-TW">
         
      </script>
     
      <div id="button">
    <input type="submit" id="send_message" value="Send Message!">
    </div>
</form>
RAW Paste Data

<?php
if (isset($_POST["g-recaptcha-response"])) {
	
	$sender_name = stripslashes($_POST["sender_name"]);
	$sender_email = stripslashes($_POST["sender_email"]);
	$sender_message = stripslashes($_POST["sender_message"]);
//	$response = isset($_POST["g-recaptcha-response"]);
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LcsR3MUAAAAAMlt3k6VZBeZHyyWihgrFrgQ7HwF',
		'response' => $_POST["g-recaptcha-response"],
	);
	$options = array(
		'http' => array (
		    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
			'method' => 'POST',
			'content' => http_build_query($data),
			'verify_peer' => true,
		),
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	//echo $verify;
	$captcha_success=json_decode($verify);
	if ($captcha_success->success==false) {
		echo "<p>You are a bot! Go away!</p>";
	} else if ($captcha_success->success==true) {
		echo "<p>You are not a bot!</p>";
//echo "<script>enableBtn()</script>";
	}
}
?>
<form action="?" method="post" enctype="multipart/form-data">

	<input name="sender_name" placeholder="Your Name..."/>
	<input name="sender_email" placeholder="Your email..."/>
	<br>
	<textarea placeholder="Your Message..." name="sender_message"></textarea>
        <div class="captcha_wrapper">
		<div class="g-recaptcha" data-sitekey="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" ></div>
	</div>
	      <script type="text/javascript"
          src="https://www.google.com/recaptcha/api.js?hl=zh-TW">
		  
      </script>
	  
	  <div id="button">
	<input type="submit" id="send_message" value="Send Message!">
	</div>
</form>
