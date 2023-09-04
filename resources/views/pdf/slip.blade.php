<!DOCTYPE html>
<html>
<head>
    <title>Salary Slip</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .info p {
            margin: 0;
        }

        .info h2 {
            margin-top: 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Salary Slip</h1>
        </div>
        <div class="info">
            <h2>Name: {{ $user->name }}</h2>
            <p>Month: {{ $userSalary->month }}</p>
            <p>Amount: {{ $userSalary->amount }}</p>
        </div>
        <div class="footer">
            Contoso
        </div>
    </div>
</body>
</html>
