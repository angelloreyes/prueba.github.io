<?php

    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function home($parems){
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis sagittis ex. Suspendisse volutpat hendrerit justo sit amet imperdiet. Duis nec dolor sem. Aliquam erat volutpat. Fusce imperdiet justo lectus, sed sollicitudin nunc cursus maximus. Fusce nec libero ipsum. In semper sem felis, et varius tortor tempus in. Nam turpis leo, facilisis et pharetra ac, malesuada non eros. Curabitur mattis ligula sed tristique consequat. Pellentesque egestas orci a dolor dictum rhoncus.";

            $this->views->getView($this,"home",$data);
        } 
      
    }


?>