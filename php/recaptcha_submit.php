<?php

$captcha;

if(isset($_POST['g-recaptcha-response']))
{
  $captcha = $_POST['g-recaptcha-response'];
}

if(!$captcha)
{
  //captcha was not sent return back to the form
} else {
  
  $secret = "SECERT_KEY_GOES_HERE";

  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
  
  if($response.success==false)
  {
    //response was false return to the form
  } else {
    //proceed with processing your form
  }
}

?>
