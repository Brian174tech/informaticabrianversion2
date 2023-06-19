<?php


class AssessmentController{

    function __construct()
    {

        include_once 'views/render.php';
        $render = new Render();
        $pageType = 'Assessment';
        $pageRequest = $_GET['request'];
        $render->setPage($pageType, $pageRequest);
        $render->buildPage();

    }

}

new AssessmentController;