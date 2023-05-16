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
    <section class="padding-block-900">
      <div class="container">
        <div class="even-columns">
          <div class="flow">
            <h1 class="fs-primary-heading fw-bold">Empowering Your Financial Future</h1>
            <p>Unlock Your Financial Potential. Experience Seamless Banking Solutions. Trust, Convenience, and Security - Your Money, Your Future. Discover a New Era in Banking.  Simplify Your Finances with Us. Your Gateway to Financial Freedom. Transforming Banking for a Better Tomorrow.</p>
            <a href="view_accnt.php"><button class="button">Get Started Now</button></a>
          </div>
          <div>
            <img src="images/illustration.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="padding-block-900">
      <div class="container">
        <div class="even-columns">
          <div class="flow text-center-sm-only margi" style="--flow-spacer: 1.5rem">
            <h2 class="fs-secondary-heading fw-bold">What is unique about our bank?</h2>
            <p>Manages all the functionalities at the tip of your finger seamlessly</p>
          </div>
          <div>
            <ul class="numbered-items | flow" role="list">
              <li>
                <div class="flow" style="--flow-spacer: 1em">
                  <h3 class="numbered-items__title | fs-600 fw-bold">Secure and Reliable</h3>
                  <p class="numbered-items__body" data-width="wide">Our banking website ensures top-notch security measures to protect your funds and personal information. With advanced encryption protocols and multi-factor authentication, you can have peace of mind while transferring and managing your funds.</p>
                </div>
              </li>
              <li>
                <div class="flow" style="--flow-spacer: 1em">
                  <h3 class="numbered-items__title | fs-600 fw-bold">Seamless User Experience</h3>
                  <p class="numbered-items__body" data-width="wide">We prioritize providing a user-friendly interface that makes transferring and managing funds effortless. Our intuitive design and streamlined processes enable you to easily navigate through the website, initiate transfers, and access comprehensive account management features.</p>

                </div>
              </li>
              <li>
                <div class="flow" style="--flow-spacer: 1em">
                  <h3 class="numbered-items__title | fs-600 fw-bold">Efficient and Timely Transactions</h3>
                  <p class="numbered-items__body" data-width="wide">Our banking website is built to offer fast and efficient fund transfers. With our robust infrastructure and optimized systems, your transactions are processed promptly, ensuring timely transfers and effective management of your funds. Say goodbye to long waiting periods and enjoy swift financial transactions.




                  </p>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="middle carousel | padding-block-700  text-center">
      <h2 class="fs-secondary-heading fw-bold">Our Services</h2>
      <!-- Carousel here -->
      <ul class="slider">
        <li>
          <img src="images/avatar-anisha.png" alt="">

          <div class="slider-content">
            <h3 class="fw-bold">View Customers</h3>
            <p data-width="wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias itaque facere repellendus pariatur ut suscipit incidunt.</p>
            <a href="view_accnt.php"><button class="button">Get Started</button></a>
          </div>
        </li>
        <li>
          <img src="images/avatar-ali.png" alt="">

          <div class="slider-content">
            <h3 class="fw-bold">Transfer Funds</h3>
            <p data-width="wide">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla atque voluptatum unde labore dignissimos vitae asperiores!</p>
            <a href="view_accnt.php"><button class="button">Get Started</button></a>
          </div>
        </li>
        <li>
          <img src="images/avatar-richard.png" alt="">

          <div class="slider-content">
            <h3 class="fw-bold">View Transactions</h3>
            <p data-width="wide">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat accusantium a animi corrupti harum aperiam quos.</p>

            <a href="transactions.php"><button class="button">Get Started</button></a>
          </div>
        </li>
        
      </ul>
      
    </section>

    
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

</html>