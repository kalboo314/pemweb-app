<!DOCTYPE html>
<html>
<head>
    <title>New Contact Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $submission->name }}</p>
    <p><strong>Email:</strong> {{ $submission->email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $submission->message }}</p>
</body>
</html>