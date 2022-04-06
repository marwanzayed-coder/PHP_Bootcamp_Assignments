<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bootcamp Assignments | Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: "Cairo", sans-serif;
        background-color: #ececec;
      }
      .card {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
      }
      @media (min-width: 768px) {
        .card {
          width: 750px;
        }
      }
      @media (min-width: 992px) {
        .card {
          width: 970px;
        }
      }
      @media (min-width: 1200px) {
        .card {
          width: 1170px;
        }
      }
      /* Start Head */

      .head {
        text-align: center;
        padding: 25px 0;
        background-color: #fafafa;
        margin-bottom: 20px;
      }
      .head h2 {
        font-size: 2em;
        margin: 0;
      }
      /* End Head */
      .week {
        margin-bottom: 20px;
      }
      .week .box {
        background-color: #fafafa;
        padding: 10px 20px;
        transition: 0.3s;
        display: block;
      }
      .week .box:hover {
        background-color: #e1e1e1;
      }
      .week .box {
        margin-bottom: 20px;
      }
      .week .box {
        font-size: 22px;
        color: #000;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
  	<div class="week">
      <div class="card">
        <div class="head">
          <h2>Week One</h2>
        </div>
        <div class="list">
          <a href="week_one/assignment_1.php" class="box">Assignment 1</a>
          <a href="week_one/assignment_2.php" class="box">Assignment 2</a>
          <a href="week_one/assignment_3.php" class="box">Assignment 3</a>
          <a href="week_one/assignment_4.php" class="box">Assignment 4</a>
        </div>
        <hr>
      </div>
  	</div>
  </body>
</html>
