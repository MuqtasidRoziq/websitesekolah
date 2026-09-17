<?php
/**
 * Class App
 * 
 * Berfungsi sebagai Jantung Routing / Front Controller MVC.
 * Bertugas menangkap URL, memecahnya, dan mengeksekusi Controller 
 * serta Method yang diminta beserta parameternya.
 */
class App {
    protected $controller = 'HomeController'; // default controller jika url null
    protected $method = 'index'; // method default jika url null
    protected $params = []; // parameter tambahan dari url 

    // Constructor 
    public function __construct() {
        $urlArray = $this->parseURL();
        $routePath = empty($urlArray) ? '' : implode('/', $urlArray);
        $routes = require_once DIR_ROUTES.'Routes.php';

        // Cek apakah URL ada di dalam routes.php menggunakan pencocokan pola Regex
        $routeFound = false;
        foreach ($routes as $route => $action) {
            // Ubah {param} menjadi regex yang menangkap nilai alfanumerik
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_-]+)', $route);
            $pattern = "@^" . $pattern . "$@D";
            
            if (preg_match($pattern, $routePath, $matches)) {
                array_shift($matches); // Hapus hasil kecocokan penuh (index 0)
                $this->params = $matches; // Simpan nilai parameter yang ditangkap
                
                $target = explode('@', $action);
                $this->controller = $target[0];
                $this->method = $target[1];
                $routeFound = true;
                break;
            }
        }

        if (!$routeFound) {
            header("HTTP/1.0 404 Not Found");
            require_once DIR_CONTROLLERS . 'ErrorController.php';
            $errorCtrl = new ErrorController();
            $errorCtrl->notFound();
            exit;
        }

        require_once DIR_CONTROLLERS.$this->controller.'.php';
        $this->controller = new $this->controller;

        // 5. Eksekusi Controller & Method
        if (method_exists($this->controller, $this->method)) {
            call_user_func_array([$this->controller, $this->method], $this->params);
        } else {
            die("Method <b>{$this->method}</b> tidak ditemukan di dalam {$this->controller}!");
        }
    }

    /**
     * Memecah URL dari browser menjadi array agar bisa dibaca oleh sistem
     * 
     * @return array Pecahan string dari URL
     */
    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return []; 
    }
}