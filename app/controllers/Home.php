<?php

class Home extends Controller {

  public function index($a = '', $b = '', $c = '') {
    $model = new Model();
    $data['name'] = 'Mary';
    $result = $model->update(2, $data);
    show($result);
    
    echo "This is the Home Controller";
    $this->view('home');
  }

}
