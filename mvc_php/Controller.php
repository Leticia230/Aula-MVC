<?php
// Controller: realiza as operações matemáticas
class Controller {
    private $model;

    public function _construct(Model $model){
        $this->model = $model;
    }

    public function somar(){
        $this->model->resultado = $this->model->numero1 + 
    }
}