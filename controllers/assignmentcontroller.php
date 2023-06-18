<?php


class AssignmentController{

    function __construct()
    {

        include_once 'views/render.php';
        $render = new Render();
        $pageType = 'Assignmentpage';
        $pageRequest = 'assignment periode <placeholder>';
        $render->setPage($pageType, $pageRequest);
        $render->buildPage();

    }

}

new AssignmentController;