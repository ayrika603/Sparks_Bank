<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sparks_bank";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$id = $_GET["Serial_No"];

$sql = "SELECT * FROM all_customers WHERE Serial_No=$id";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sparks Bank</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/a11y-slider@latest/dist/a11y-slider.css" />
  <script src="https://unpkg.com/a11y-slider@latest/dist/a11y-slider.js" defer></script>
</head>
<style>
        body {
            margin: 50px;
            font-family: Arial, sans-serif;
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #d65416b8;
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #82b74b;
        }
    </style>

<body>
  <header class="primary-header">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php"><img src="images/logo.png" alt="Manage"></a>
       
        <nav class="primary-navigation" id="primary-navigation">
          <ul aria-label="Primary" role="list" class="nav-list">
            <li><a href="view_accnt.php">View All Accounts</a></li>
            <li><a href="view_accnt.php">Transfer Funds</a></li>
            <li><a href="transactions.php">Transactions</a></li>
            
          </ul>
        </nav>
        
      </div>
    </div>
  </header>
  <main>
  <h1>Account Details</h1>
    <table>
        <thead>
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Account number</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row["Serial_No"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["Account Number"]; ?></td>
                <td><?php echo $row["Balance"]; ?></td>
            </tr>
        </tbody>
    </table>

</main>


  <footer class="primary-footer | padding-block-700 bg-neutral-900 text-neutral-100">
    <div class="container">
      <div class="primary-footer-wrapper">
        <div class="primary-footer-logo-social">
          <a href="#" aria-label="home" class="logo2">
           <img src="images/logo.png" alt="">Sparks Bank
          </a>

          <ul class="social-list" role="list" aria-label="Social links">
            <li><a aria-label="facebook" href="#"><img src="images/facebook (1).png" alt="">
                </a>
            </li>
           
            <li><a aria-label="twitter" href="#">
                <img src="images/twitter.png" alt="">
              </a></li>
            
            <li><a aria-label="instragram" href="#">
               <img src="images/instagram.png" alt="">
              </a></li>
          </ul>
        </div>
        <div class="primary-footer-nav">
          <nav class="footer-nav">
            <ul class="flow" style="--flow-spacer: 1em" aria-label="Footer" role="list">
              <li><a href="view_accnt.php">View Customers</a></li>
              <li><a href="view_accnt.php">Transfer Funds</a></li>
              <li><a href="transactions.php">Transactions</a></li>
            </ul>
          </nav>
        </div>
        <div class="primary-footer-form">
          <form action="">
            <input type="email" placeholder="Email">
            <button class="button" data-shadow="none">Go</button>
          </form>
          <p>Copyright 2023. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>


  <script type="module" src="/main.js"></script>
</body>