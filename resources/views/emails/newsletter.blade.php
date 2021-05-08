<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsletter</title>
    <style>
        body {
            background-image: url("http://bmusewebsites.s3.amazonaws.com/test/background.jpg");
            background-repeat: repeat-y no-repeat;
            background-position: 50% 50%;
            width: 100%;
            padding-bottom: 50px;
        }

        .container {
            width: 600px;
            margin: 0 auto;
            background: #f8f5ec;
            padding-left: 50px;
            padding-right: 50px;
        }

        .content {
            font-family: Georgia, Times, serif;
            font-size: 14px;
            color: #333333;
            padding-bottom: 30px;
        }

        hr.separator {
            border-top: 2px solid #BDBAB5;
            margin-bottom: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <img src="http://bmusewebsites.s3.amazonaws.com/test/logo.gif" alt="Missy Higgins logo">
            <hr class="separator">
            <div class="email_body">
                {!! $body !!}
            </div>
            <hr class="separator">
        </div>
    </div>
</body>

</html>
