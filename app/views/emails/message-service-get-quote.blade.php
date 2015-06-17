
<?php
$name = Input::get('name');
$email = Input::get ('email');
$contact_number = Input::get ('contact_number');
$address = Input::get ('address');
$service = Input::get ('service');
$message = Input::get ('message');
date_default_timezone_set('Asia/Manila');
$date_time = date("F j, Y, g:i A");
$userIpAddress = Request::getClientIp();
?> 

<div>
<p><strong style="text-decoration: underline;">{{ $name }}</strong> of <strong style="text-decoration: underline;">{{ $address }}</strong> messaged you on <strong style="text-decoration: underline;">{{ $date_time }}</strong></p>
<p><strong style="color: #777;">RE:</strong> <strong style="text-decoration: underline;">{{ $service }}</strong></p>
<p><strong style="color: #777;">Message:</strong> <br />{{ $message }}</p>
<span><strong style="color: #777;">Contact Details:</strong> <strong style="text-decoration: underline;">{{ $email }}</strong></span><br />
<span><strong style="color: #777;">Contact #:</strong> <strong style="text-decoration: underline;">{{ $contact_number }}</strong></span><br />
<span><strong style="color: #777;">{{ $userIpAddress }}</strong></span><br />
</div>
