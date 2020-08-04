<?php
class App
{
    protected $controller = 'home';
    protected $action = 'hello';
    protected $params = [];

    public function __construct()
    {
        $converter = new Converter();
        $path = $this->urlProcess();

        if ($path) {
            if (file_exists('./mvc/controllers/' . $path[0] . '.php')) {
                $this->controller = $path[0];
                unset($path[0]);
            }
        }
        require_once './mvc/controllers/' . $this->controller . '.php';
        $converter->setFrom($this->controller);
        $className = strval($converter->upperfirstletter());
        $this->controller = new $className;

        if (isset($path[1])) {
            if (method_exists($converter->getTo(), $path[1])) {
                $this->action = $path[1];
            }
            unset($path[1]);
        }

        $this->params = $path ? array_values($path) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }
    public function urlProcess()
    {
        if (isset($_GET['url'])) {
            $pathArray = explode('/', filter_var(trim($_GET['url'], '/')));
            foreach ($pathArray as $key => $value) {
                $pathArray[$key] = strtolower($value);
            }
            return $pathArray;
        }
    }
}
