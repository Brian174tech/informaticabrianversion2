<?php


class ExperimentController{

    function __construct()
    {

        include_once 'views/render.php';
        $render = new Render();
        $pageType = 'Experimentpage';
        $pageRequest = 'experiment <placeholder>';
        $render->setPage($pageType, $pageRequest);
        $render->buildPage();

    }


}
  
new ExperimentController;