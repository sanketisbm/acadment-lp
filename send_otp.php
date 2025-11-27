<?php
$mobile_no = $_POST['mobile_no'];
$otp = $_POST['otp'];

$message = "Dear Student, Your OTP to complete the registration process is: $otp Please enter this OTP on the registration page to verify your account. Thank you, Acadment Admissions Team ISBM";

$message = urlencode($message);

// FULL PASSWORD (with & inside) — must be URL encoded
$password = urlencode('ISBM@sms&99');

$url = "http://www.merasandesh.com/api/sendsms?username=sibm_university&password=$password&senderid=EISBMA&message=$message&numbers=$mobile_no&unicode=0&template_id=1707175491454038222";

// send request
$response = file_get_contents($url);

echo json_encode([
    "status" => 1,
    "message" => $message,
    "url" => $url,        // Now you will get the correct full URL
    "response" => $response
]);
