<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <script src="https://kit.fontawesome.com/57305a0c7f.js" crossorigin="anonymous"></script>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="admin-style.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <!-- <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div> -->
        <div class="box">
          <input type="text" placeholder="search here">
        <i class="fas fa-search" id="search-icon"></i>
      </div>
        <div class="header-right">
          
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined"></span> Afri-Tech
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
               Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="admin-prod.php" target="_blank">
                Products <!-- here the admin can see what prooducts are available on the website in a table format with all the products list and thier specific information like the quantities the owners blah blah -->
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              Orders 
              <!-- Here the admin can see the orders that are available at the time and whether those orders are shipped or if they are still pending mnamn again this page will also be in a table format  -->
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
               Users 
               <!-- sees how many subscribers does the website have and sees when new user is created ....... -->
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              Payment 
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
             Reports
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
               Settings
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>DASHBOARD</h2>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <h3>PRODUCTS</h3>
              <span class="material-icons-outlined">inventory_2</span>
            </div>
            <h1>249</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>CATEGORIES</h3>
              <span class="material-icons-outlined">category</span>
            </div>
            <h1>25</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>CUSTOMERS</h3>
              <span class="material-icons-outlined">groups</span>
            </div>
            <h1>1500</h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>ALERTS</h3>
              <span class="material-icons-outlined">notification_important</span>
            </div>
            <h1>56</h1>
          </div>

        </div>

        <div class="charts">

          <div class="charts-card">
            <h2 class="chart-title">Top 5 Products</h2>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <h2 class="chart-title">Purchase and Sales Orders</h2>
            <div id="area-chart"></div>
          </div>

        </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="admin-script.js"></script>
  </body>
</html>