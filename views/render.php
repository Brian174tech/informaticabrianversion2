<?php

class Render{

    private string $render;
    private array $data = [];
    private $titlePage = [];

    function __construct(/*string $render*/){

        // $this->render = $render;

    }

    function setPage(string $pageType, string $pageRequest){

        $this->titlePage[$pageType] = $pageRequest;

    }

    function setData(string $dataKey, mixed $data){

        $this->data[$dataKey] = $data;

    }

    function buildPage(){
        $key = key($this->titlePage);
        $value = current($this->titlePage); 
        
        $title = $key;
        $content = $value;

        echo "trying to load page: $title with content: $content";

        if (!empty($this->data)){
            $showData = $this->data;
            foreach ($showData as $data){
                echo"<br>$data<br>";
            }
        }else{
            echo '<br>no data given';
        }

        require_once 'views/'.$title.'view.php';
            $titleView = $title.'View';
            $view = new $titleView;

        if (method_exists($view, $content)){
            
            $view->$content();

        } else{

            echo '<br>requested content does not exist';

        }
        


    }

}