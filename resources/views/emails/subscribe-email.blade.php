<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Platform</title>
    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }
        .message {
            padding: 20px;
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <div class="message">
            <h1>{{$param_data['title']}}</h1>
            <h1>Thank you for subscribing to our newsletter</h1>
        </div>
        
    </div>
</body>

</html>