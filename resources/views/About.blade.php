<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
 
</head>
<body>

  <div class="container">
    <div class="about-section">
       
            <div class="navbar">
               
                <a href="http://127.0.0.1:8000/dashboard">Dashboard</a>
                <a href="http://127.0.0.1:8000/Blog">Blog</a>
                <a href="http://127.0.0.1:8000/post">Post</a>
                <a href="http://127.0.0.1:8000/about">About</a>
            </div>
      <h1>About Us</h1>
      <p>Welcome to our blog! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat justo et lectus pharetra, vitae pulvinar elit tempor. Mauris sit amet risus quis turpis eleifend vestibulum.</p>
    </div>

    <div class="team-members">
      <div class="team-member">
      
      </div>
    </div>
  </div>

</body>
</html>
<style>
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 0 20px;
    }

    h1 {
      text-align: center;
      font-size: 36px;
      color: #333;
    }

    p {
      font-size: 16px;
      line-height: 1.6;
      color: #666;
    }

    /* About Page Styles */
    .about-section {
      text-align: center;
      margin-bottom: 40px;
    }

    .about-section h2 {
      font-size: 28px;
      color: #333;
    }

    .about-section p {
      margin-top: 10px;
    }

    .team-members {
      display: flex;
      justify-content: space-around;
      margin-top: 40px;
    }

    .team-member {
      text-align: center;
      width: 30%;
    }

    .team-member img {
      width: 80%;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .team-member h3 {
      font-size: 20px;
      color: #333;
    }

    .team-member p {
      font-size: 16px;
      color: #666;
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