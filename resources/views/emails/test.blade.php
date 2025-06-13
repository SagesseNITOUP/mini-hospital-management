<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 class="mb-5 mt-2">Dear {{ isset($user) ? $user->name : '' }}</h2>

<p class="mb-5">Your account for the Careers in Africa candidate system been created successfully. Click the authenticate button
    to confirm your email address. You can then login to your account by providing your credentials in the log in page.</p>

<a href="{{ route('verification', ['id' => $user->id, 'verificationCode' => $user->email_verification_code]) }}" class="rounded border-1 border-green-100 bg-green-500 p-2 mb-5 text-white">Confirm</a>

<p class="mt-5 mb-5">If you need any assistance please contact <a href="#">recruitment@careersinafrica.com</a></p>
<p class="mb-5">Regards</p>
<p class="mb-5">AI DOCTOR</p>
</body>
</html>
