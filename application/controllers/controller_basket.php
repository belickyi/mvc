<?php

class Controller_Basket extends Controller
{
  function action_index()
  {
    $this->view->generate('basket_view.php', 'template_view.php');
  }
}