<?php

class Products extends Controller {

  public function index($a = '', $b = '', $c = '') {
    echo "This is the Products Controller";
    $this->view('home');
  }

}
