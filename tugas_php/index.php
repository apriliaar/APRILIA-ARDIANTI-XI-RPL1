<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        /* Global Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f4f6f9;
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }

        /* Navbar Styling */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #1e2946;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background-color: #324475;
            padding: 20px;
            color: white;
            height: calc(100vh - 60px); /* Height of viewport minus height of navbar */
            position: fixed;
            top: 60px; /* Menyesuaikan dengan tinggi navbar */
            left: 0; /* Ensure the sidebar is aligned to the left */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            overflow-y: auto; /* Allow scrolling if content exceeds viewport height */
        }

        .sidebar h2 {
            text-align: center;
            color: #ecf0f1;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #1e2946;
            color: #ecf0f1;
        }

        /* Content Styling */
        .content {
            margin-left: 270px; /* Give space for the sidebar */
            padding: 20px;
            margin-top: 60px; /* Menyesuaikan dengan tinggi navbar */
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }

        .content-inner {
            max-width: 800px; /* Max width for content */
            width: 100%; /* Full width within max-width */
        }

        .content h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">Chaa</div>
</div>

<!-- Sidebar -->
<div class="sidebar">
    <h2>Menu</h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
    </ul>
</div>

<!-- Content Area -->
<div class="content">
    <div class="content-inner">
        <h1>Selamat Datang di Halaman Utama</h1>
        <p>Ini adalah halaman utama</p>
    </div>
</div>

</body>
</html>
