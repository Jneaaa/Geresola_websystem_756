<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        /* Container for the dashboard */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header style */
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Main content section */
        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Card style for dashboard items */
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 250px;
            text-align: center;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin: 10px 0;
            color: #4CAF50;
        }

        .card p {
            color: #777;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>My Dashboard</h1>
        </div>

        <div class="content">
            <div class="card">
                <h3>Card 1</h3>
                <p>Some content here</p>
            </div>
            <div class="card">
                <h3>Card 2</h3>
                <p>Some content here</p>
            </div>
            <div class="card">
                <h3>Card 3</h3>
                <p>Some content here</p>
            </div>
            <div class="card">
                <h3>Card 4</h3>
                <p>Some content here</p>
            </div>
        </div>
    </div>
</body>
</html>
