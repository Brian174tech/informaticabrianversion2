<?php


class ExperimentController{

    function __construct()
    {

        include_once 'views/render.php';
        $render = new Render();
        $pageType = 'Experiment';
        $pageRequest = $_GET['request'];
        $render->setPage($pageType, $pageRequest);
        $render->buildPage();

    }


}
  
new ExperimentController;