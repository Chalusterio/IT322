<style>
  /* Match Sidebar Theme with Header */
  .sidebar {
    background-color: #F6F0F0 !important; /* Same as header */
    border-right: 2px solid #E0D6D6; /* Soft border */
    padding: 15px 10px;
    width: 250px;
    min-height: 100vh;
    box-shadow: 4px 0 10px rgba(0, 0, 0, 0.05); /* Soft shadow for depth */
  }

  /* Sidebar Navigation */
  .sidebar-nav {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  /* Sidebar Nav Items */
  .sidebar-nav .nav-item {
    margin-bottom: 10px;
  }

  .sidebar-nav .nav-item a {
    color: #735240 !important; /* Match text color */
    font-weight: bold;
    padding: 12px 15px;
    display: flex;
    align-items: center;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
  }

  /* Sidebar Icons */
  .sidebar-nav .nav-item a i {
    color: #735240 !important; /* Match icon color */
    font-size: 1.3rem;
    margin-right: 10px;
  }

  /* Active Sidebar Link */
  .sidebar-nav .nav-item a:hover,
  .sidebar-nav .nav-item a.active {
    background-color: #EAE3E3 !important; /* Light hover effect */
    box-shadow: inset 3px 3px 6px rgba(0, 0, 0, 0.1);
    transform: translateX(5px);
  }
</style>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link" href="shop.html">
        <i class="bi bi-bag"></i>
        <span>Shop</span>
      </a>
    </li><!-- End Shop Nav -->

    <li class="nav-item">
      <a class="nav-link" href="my-orders.html">
        <i class="bi bi-cart-check"></i>
        <span>My Orders</span>
      </a>
    </li><!-- End My Orders Nav -->

    <li class="nav-item">
      <a class="nav-link" href="wishlist.html">
        <i class="bi bi-heart"></i>
        <span>Wishlist</span>
      </a>
    </li><!-- End Wishlist Nav -->

    <li class="nav-item">
      <a class="nav-link" href="about-us.html">
        <i class="bi bi-info-circle"></i>
        <span>About Us</span>
      </a>
    </li><!-- End About Us Nav -->

  </ul>
</aside><!-- End Sidebar -->

<main id="main" class="main">
