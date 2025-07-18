<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Connection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            width: 80%;
            max-width: 600px;
        }

        h2 {
            color: #4CAF50;
            margin-bottom: 20px;
            font-size: 24px;
        }

        a {
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            background-color: #4CAF50;
            padding: 12px 20px;
            border-radius: 4px;
            display: block;
            margin: 10px 0;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }

        .footer {
            position: absolute;
            bottom: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Welcome to MySQL PDO Connection Test</h2>
        <a href="database/conn.php">Check Database Connection</a>
        <a href="pages/insert_from.php">Insert Data into Database</a>
        <a href="pages/select.php">Show Data</a>
    </div>

    <div class="footer">
        <p>&copy; 2025 Your Website. All Rights Reserved.</p>
    </div>

</body>
</html>
