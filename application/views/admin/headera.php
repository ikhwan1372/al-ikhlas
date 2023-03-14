<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $head_title ?? "APPS Default"; ?>    Hii Admin</title>

  <!-- Style css -->
  <link href="<?php echo base_url('') ?>css/style.css" rel="stylesheet">

</head>

<body>
  <!--**********************************
            Nav header start
        ***********************************-->
  <div class="nav-header">
    <a href="<?php echo base_url('') ?> " class="brand-logo">
      <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
        <defs>
        </defs>
      </svg>
    </a>
  </div>

  <div class="header border-bottom">
    <div class="header-content">
      <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="header-left">
            <div class="dashboard_bar">
              Dashboard
            </div>
          </div>
          <ul class="navbar-nav header-right">
            <li class="nav-item dropdown  header-profile">
              <a class="nav-link" href="<?php echo base_url('') ?>javascript:void(0);" role="button" data-bs-toggle="dropdown">
                <img src="<?php echo base_url('') ?>images/user.jpg" width="56" alt="">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="<?php echo base_url('') ?>app-profile.html" class="dropdown-item ai-icon">
                  <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <div class="ms-2">Profile </div>
                  
                  <?= $this->session->userdata('session_namafull'); ?> __
                        <?= $this->session->userdata('session_level'); ?>

                <a href="<?php echo base_url('') ?>" class="dropdown-item ai-icon">
                  <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                  </svg>
                  <div class="ms-2">Logout </div>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

  <!--**********************************
            Sidebar start
        ***********************************-->
  <div class="dlabnav">
    <div class="dlabnav-scroll">
      <ul class="metismenu" id="menu">
        <li><a class="has-arrow " href="<?php echo base_url('') ?>javascript:void()" aria-expanded="false">
            <i class="fas fa-home"></i>
            <span class="nav-text">Dashboard</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="<?php echo base_url('dashboa/dasha') ?>">Project</a></li>
          </ul>

        </li>

        <li><a class="has-arrow " href="<?php echo base_url('') ?>javascript:void()" aria-expanded="false">
            <i class="fas fa-info-circle"></i>
            <span class="nav-text">Apps</span>
          </a>
          <ul aria-expanded="false">
            <li><a href="<?php echo base_url('') ?>">Profile</a></li>
            <li><a href="<?php echo base_url('') ?>">Post Details</a></li>
          </ul>
        </li>
        <li><a class="has-arrow " href="<?php echo base_url('') ?>javascript:void()" aria-expanded="false">
            <i class="fas fa-clone"></i>
            <span class="nav-text">Pages</span>
          </a>
          <ul aria-expanded="false">
          <li><a href="<?php echo site_url('dashboa/user')?>">users</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!--**********************************
            Sidebar end
        ***********************************-->