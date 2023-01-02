<?php
    class Home extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home(){
            $data['page_id'] = 1;
            $data['page-tag'] = "Home";
            $data['page_title'] = "Pagina principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laborum natus fugit, ad quae numquam, illo vel tempora quos temporibus vero!";

            $this->views->getView($this, "home", $data);

        }
    }

?>