<?php


class AssessmentController{

    function __construct()
    {

        include_once 'views/render.php';
        $render = new Render();
        $pageType = 'Assessmentpage';
        $pageRequest = 'assessment periode <placeholder>';
        $render->setPage($pageType, $pageRequest);
        $render->buildPage();

    }

}

new AssessmentController;