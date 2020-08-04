<?php
class Controller
{
    protected $converter;
    public function __construct()
    {
        $this->converter = new Converter();
    }
    public function model($model)
    {
        require_once './mvc/models/' . $model . '.php';
        $this->converter->setFrom($model);
        $className = strval($this->converter->upperfirstletter());
        return new $className;
    }
    public function view($view, $data = [])
    {
        require_once './mvc/views/' . $view . '.php';
    }
}
