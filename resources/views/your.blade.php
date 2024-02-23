<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <div class="navbar">
       
        <a href="http://127.0.0.1:8000/dashboard">Dashboard</a>
        <a href="http://127.0.0.1:8000/Blog">Blog</a>
        <a href="http://127.0.0.1:8000/post">Post</a>
        <a href="http://127.0.0.1:8000/about">About</a>
    </div>
</head>
<body>
   
</body>
</html>

<style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    /* Button Styles */
    .edit-btn, .delete-btn {
      padding: 5px 10px;
      margin-right: 5px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      text-decoration: none;
    }
    .edit-btn {
      background-color: #007bff;
      color: #fff;
    }

    .delete-btn {
      background-color: #dc3545;
      color: #fff;
    }
    .navbar {
      background-color: #333; /* Background color */
      overflow: hidden;
      padding: 10px 20px;
    }

    .navbar a {
      float: left;
      color: #fff;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .navbar a:hover {
      background-color: #ddd; /* Hover background color */
      color: #333; /* Hover text color */
    }

    .navbar a.active {
      background-color: #007bff; /* Active background color */
      color: #fff; /* Active text color */
    }
  </style>