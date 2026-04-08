<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Hello {{ $member->name }},</h2>

    <p>Your member profile has been created successfully.</p>

    <p><strong>Email:</strong> {{ $member->email }}</p>
    <p><strong>Phone:</strong> {{ $member->phone }}</p>
    <p><strong>Address:</strong> {{ $member->address }}</p>

    <p>Thank you.</p>
</body>
</html>