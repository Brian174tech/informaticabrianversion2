<?php


class AssignmentController{

    function __construct()
    {

        include_once 'views/render.php';
        $render = new Render();
        $pageType = 'Assignment';
        $pageRequest = $_GET['request'];
        $render->setPage($pageType, $pageRequest);
        $render->buildPage();

    }

}

new AssignmentController;