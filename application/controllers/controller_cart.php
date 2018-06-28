<?php
class Controller_Cart extends Controller
{
    function action_index(){
        $this->view->generate('cart_view.php', 'template_view.php');
    }

    function action_addtocart()
    {
        
    }
}




