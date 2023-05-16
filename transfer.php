
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sparks_bank";

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    if (isset($_GET["sender_id"])) {
        $sender_id = $_GET["sender_id"];

        $sql = "SELECT * FROM all_customers WHERE Serial_No= $sender_id";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        $sender = $result->fetch_assoc();
    }

    if (isset($_POST["submit"])) {
    
        $receiver_id = $_POST["receiver_id"];
        $amount = $_POST["amount"];

        // Get sender's information
        $sql = "SELECT * FROM all_customers WHERE Serial_No=$sender_id";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        $sender = $result->fetch_assoc();
        $sender_name = $sender["Name"];
        $sender_balance = $sender["Balance"];

        // Get receiver's information
        $sql = "SELECT * FROM all_customers WHERE Serial_No=$receiver_id";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        $receiver = $result->fetch_assoc();
        $receiver_name = $receiver["Name"];
        $receiver_balance = $receiver["Balance"];

        // Check if sender has enough balance to transfer
        if ($sender_balance < $amount) {
            echo "<div class=\"alert alert-danger\">Insufficient balance</div>";
        } else {
            // Update sender's balance
            $new_sender_balance = $sender_balance - $amount;
            $sql = "UPDATE all_customers SET Balance='$new_sender_balance' WHERE Serial_No=$sender_id";

            if (!$connection->query($sql)) {
                die("Error updating sender's balance: " . $connection->error);
            }

            // Update receiver's balance
            $new_receiver_balance = $receiver_balance + $amount;
            $sql = "UPDATE all_customers SET Balance='$new_receiver_balance' WHERE Serial_No=$receiver_id";

            if (!$connection->query($sql)) {
                die("Error updating receiver's balance: " . $connection->error);
            }

            // Insert transaction record into transfers table
            $sql = "INSERT INTO transfers(sender_name, sender_id, receiver_name, receiver_id, amount) VALUES ('$sender_name', '$sender_id', '$receiver_name', '$receiver_id','$amount')";
            if (!$connection->query($sql)) {
                die("Error inserting transaction record: " . $connection->error);
            }

            echo "<div class=\"alert alert-success\">Transaction successful</div>";
        }
    }

    $sql = "SELECT * FROM all_customers WHERE Serial_No!=$sender_id";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->error);
    }
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="style.css">-->
</head>
  <script src="https://unpkg.com/a11y-slider@latest/dist/a11y-slider.js" defer></script>
</head>
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
<div class="container">
        <h1 style="padding:10px">Transfer Funds</h1>
        <form method="POST">
            <div class="form-group">
                <label for="sender_name" style="padding:10px">Sender Name:</label>
                <input style="padding:10px" type="text" class="form-control" id="sender_name" name="sender_name"
                    value="<?php echo $sender["Name"]; ?>"readonly>
            </div>
            <div class="form-group">
                <label for="sender_balance" style="padding:10px">Sender Balance:</label>
                <input style="padding:10px" type="text" class="form-control" id="sender_balance" name="sender_balance"
                    value="<?php echo $sender["Balance"]; ?>"readonly >
            </div>
            <div class="form-group">
                <label for="receiver_id" style="padding:10px">Receiver:</label>
                <select style="padding:10px" class="form-control" id="receiver_id" name="receiver_id">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row["Serial_No"]; ?>"><?php echo $row["Name"]; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="amount" style="padding:10px">Amount:</label>
                <input style="padding:10px" type="number" class="form-control" id="amount" name="amount" min="0"
                    max="<?php echo $sender["Balance"]; ?>" required>
            </div>
            <input type="hidden" name="sender_id" value="<?php echo $sender_id; ?>">
            <div style="padding-top:10px"><button type="submit" class="btn btn-success" name="submit"
                    style="padding:10px">Transfer</button></div>
        </form>
    </div>
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
              <li><a href="transfer.php">Transfer Funds</a></li>
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
    
    
</body>
   