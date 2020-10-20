### Google Recaptcha set up in php
This is for a reCAPTCHA v2 implementation.

1. Set up a recaptcha to get the keys.
[https://www.google.com/recaptcha/about/](https://www.google.com/recaptcha/about/)

2. Add to your html form page.
In the head tags at the top of the page add:
`<script src="https://www.google.com/recaptcha/api.js" async defer></script>`

Then at the bottom of your form within the form tags add:
`<div class="g-recaptcha" data-sitekey="yoursitekey"></div>`

3. Add to your form post page.
Note curl most be working on php.

```
$secret = "yoursecert key";
$token=$_POST['g-recaptcha-response'];
$ip = $_SERVER['REMOTE_ADDR'];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'secret' => $secret,
        'response' => $token,
        'remoteip' => $ip
    ],
    CURLOPT_RETURNTRANSFER => true
]);

$output = curl_exec($ch);
curl_close($ch);

$json = json_decode($output);
if (isset($json->success) && $json->success)
{ echo 'success'; }
else
{ echo 'error'; }
```

Alternative method using php.
```
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
```

- Source(s)
  - [https://developers.google.com/recaptcha/intro](https://developers.google.com/recaptcha/intro)
  - [https://stackoverflow.com/questions/43528882/recaptcha-not-verifying-with-file-get-contents](https://stackoverflow.com/questions/43528882/recaptcha-not-verifying-with-file-get-contents)
