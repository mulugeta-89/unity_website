<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Landing Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styles */
    body {
        background-color: #343a40;
        padding-top: 20px;
    }
    .btn {
        background: #f7b205;
        padding: 7px 25px;
    }
    .btn:hover {
        color: white;
        background-color: #4c1864
    }
    .admin-links {
      text-align: center;
      margin-top: 20px;
    }
    .admin-links a {
      display: block;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
    <h1 class="text-center display-4 font-weight-bold my-4 text-uppercase" style="color: wheat">
        Unity University Admin Page
    </h1>
<div class="container">
  <div class="admin-links">
    <a href="/news/manage" class="btn">News</a>
    <a href="/events/manage" class="btn">Events</a>
    <a href="/advertisments/manage" class="btn">Advertisments</a>
    <a href="/voiceofunity/manage" class="btn">Voice of Unity</a>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
