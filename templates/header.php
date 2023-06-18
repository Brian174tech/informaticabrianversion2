
<header class="logomain">
      <img id="mainlogo" alt="logo" src="images/mainlogo1.svg" />
      <span>Brian</span>
</header>

    <nav class="navbar">
      <nav class="navflex">
        <ul class=breadcrumb>
          <li id="currentpage">Home</a></li>
        </ul>
        <nav class="navbutton">
          <ul id="menuitems" class="menuitems">
            <li class="dropdown"><a>Assignments</a><a class="dropdown-content" href="old" target="_blank"> Assignments-P1</a><a class="dropdown-content2" href="assignmentsp2">Assignments-P4</a></li>
            <li class="dropdown"><a>Assessments</a><a class="dropdown-content" href="assessment">Assessment-P1</a><a class="dropdown-content2" href="assessment/assessmentp2.php">Assessment-P2</a></li>
            <li><a href="experiments">Experiments</a></li>
            <li><a href="projects">Projects</a></li>
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

