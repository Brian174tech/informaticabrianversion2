
<header class="logomain">
      <img id="mainlogo" alt="logo" src="images/mainlogo1.svg" />
      <span>Brian</span>
</header>

    <nav class="navbar">
      <nav class="navflex">
        <ul class=breadcrumb>
          <li><a href="?">Home</a></li>
        </ul>
        <nav class="navbutton">
          <ul id="menuitems" class="menuitems">
            <li class="dropdown"><a>Assignments</a><a class="dropdown-content" href="?page=assignment&request=assignmentp1"> Assignments-P1</a><a class="dropdown-content2" href="?page=assignment&request=assignmentp4">Assignments-P4</a></li>
            <li class="dropdown"><a>Assessments</a><a class="dropdown-content" href="?page=assessment&request=assessmentp1">Assessment-P1</a><a class="dropdown-content2" href="?page=assessment&request=assessmentp2">Assessment-P2</a></li>
            <li><a href="?page=experiment&request=experiment1">Experiments</a></li>
            <li><a href="?page=project&request=project1">Projects</a></li>
          </ul>
        </nav>
      </nav>
    </nav>

<section class="messageinfo">
<?php
// Show messages or errors
if (isset($_SESSION['message'])) {
    echo $lang->get('message') . $lang->get($_SESSION['message']);
    unset($_SESSION['message']);
};
if (isset($_SESSION['error'])) {
    echo $lang->get('error') . $lang->get($_SESSION['error']);
    unset($_SESSION['error']);
}
?>
</section>

<main class="contentmain">
    <!-- <h1><?php echo $title; ?></h1> -->

