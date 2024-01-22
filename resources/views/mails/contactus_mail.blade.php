<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <h1>{{ $mailData['subject'] }}</h1>
    <p>Name: {{ $mailData['first_name'].' '. $mailData['first_name'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Phone Number: {{ $mailData['phone_number'] }}</p>
  
    <p>Message: {{ $mailData['message'] }}</p>
     
    <p>Thank you</p>
</body>
</html>