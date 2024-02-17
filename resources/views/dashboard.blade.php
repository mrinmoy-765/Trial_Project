<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #3498db;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        nav a.logout {
            color: #e74c3c;
            background-color: transparent;
            border: none;
            margin: 0 10px;
            padding: 10px;
            cursor: pointer;
        }

        nav a.logout:hover {
            background-color: #e74c3c;
            color: #fff;
        }

        section {
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="generate-shorten-link">Shorten Link Form</a>
        <a href="logout" class="logout">Logout</a>
    </nav>

    <section>
        <!-- Content of the page goes here -->
        <h1>This is Dashboard</h1>
    </section>

   
</body>
</html>
