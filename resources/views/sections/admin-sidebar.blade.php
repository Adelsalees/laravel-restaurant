@extends('layouts.admin')

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <h4>Logo</h4>
    </div>
    <ul class="nav">
      <li class="nav-item nav-category">
        <span class="nav-link">NAVIGATION</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">DASHBOARD</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('AllUsers') }}">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">ALL USERS</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">ORDERS</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">RESERVATIONS</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">FOODS</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">CHEFS</span>
        </a>
      </li>
    </ul>
  </nav>