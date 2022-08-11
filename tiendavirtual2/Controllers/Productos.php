<?php

    class Productos extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function productos($parems){
            $data['page_id'] = 2;
            $data['page_tag'] = "Productos";
            $data['page_title'] = "Productos en ventas";
            $data['page_name'] = "productos";
            $this->views->getView($this,"productos",$data);
        } 
      
    }


?>