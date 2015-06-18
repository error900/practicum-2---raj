
<?php
$name = Input::get('name');
$email = Input::get ('email');
$contact_number = Input::get ('contact_number');
$address = Input::get ('address');
$subject = Input::get ('subject');
$message = Input::get ('message');
date_default_timezone_set('Asia/Manila');
$date_time = date("F j, Y, g:i A");
$userIpAddress = Request::getClientIp();
$content = Cart::content();
?> 

<p><strong style="color: #777;">Name:</strong>		{{ $name }}</p>
<p><strong style="color: #777;">Email Address:</strong>		{{ $email }}</p>
<p><strong style="color: #777;">Contact #:</strong>		{{ $contact_number }}</p>
<p><strong style="color: #777;">Address:</strong>		{{ $address }}</p>
<p><strong style="color: #777;">Subject:</strong>		{{ $subject }}</p>
<p><strong style="color: #777;">Message:</strong>		{{ $message }}</p>
<table style="padding: 30px;">
<tr style="color: #777;">
<th>Item(s)</th>
<th>Quantity</th>
</tr>
@foreach ($content as $row)
<tr style="text-align: center;">
<td>{{ $row->product->brand }} - {{ $row->product->model }}</td>
<td>{{ $row->qty }}</td>
</tr>
@endforeach
</table><br />
<p><strong style="color: #777;">Date:</strong>		{{ $date_time }}</p>
<p><strong style="color: #777;">{{ $userIpAddress }}</strong></p>
