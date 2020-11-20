<?php
namespace App;

class Controller{
    
    var $vars = [];
    var $layout = 'default';

    /**
     * set
     *
     * @param  mixed $d
     * @return void
     */
    function set($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }
        
    /**
     * render
     *
     * @param  mixed $filname
     * @return void
     */
    function render($filname)
    {
        extract($this->vars);
        ob_start();
        require(ROOT. 'Views/'. ucfirst(str_replace('Controller','',get_class($this))) . '/' . $filname . '.php' );
        $content_for_layout = ob_get_clean();

        if($this->layout == false)
        {
            $content_for_layout;
        }else
        {
            require(ROOT. "Views/layouts" . $this->layout . '.php');
        }
    }


}