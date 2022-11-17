<?php
class Pages extends Controller {
    public function __construct(){

    }

    public function index() {
        $data = [
            'title' => 'Bienvenido a Tamizjo'
        ];

        $this->view('pages/index', $data);

    }

}
