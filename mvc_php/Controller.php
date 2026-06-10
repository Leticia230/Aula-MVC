<?php
// Controller: realiza as operações matemáticas
class Controller {
    private $model;

    public function _construct(Model $model){
        $this->model = $model;
    }

    public function somar(){
        $this->model->resultado = $this->model->numero1 + $this->model->numero2;
    }

    public function subtrair(){
        $this->model->resultado = $this->model->numero1 - $this->model->numero2;
    }

    public function multiplicar(){
        $this->model->resultado = $this->model->numero1 * $this->model->numero2;
    }

    public function dividir(){
        $this->model->resultado = $this->model->numero1 / $this->model->numero2;
    } else {
        $this->model->reusltado = "Erro: divisão por zero!";
    }
}
}