<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="index.php"><img src="img/logo.png" class="img" width="100"></a></p>
        <li class="mt" style="margin-top: 0;">
        <a <?php if($uc == "homepage"){echo "class=\"active\"";} ?> href="index.php">
          <i class="fa fa-home"></i>
          <span>Home</span>
          </a>
        </li>
        <li class="mt" style="margin-top: 0;">
            <a <?php if($uc == "listClan"){echo "class=\"active\"";} ?> href="index.php?uc=listClan">
                <i class="fa fa-list-ul"></i>
                <span>Liste des clans</span>
            </a>
        </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
