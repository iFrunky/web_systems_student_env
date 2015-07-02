<?php
include_once 'account.routes.php';
class Router {
  private static $routes = array();

  private function __constructor() {}

  public static function get($pattern, $callback) {
    self::set('GET', $pattern, $callback);
  }

  public static function post($pattern, $callback) {
    self::set('POST', $pattern, $callback);
  }

  private static function set($type, $pattern, $callback) {
    if (!function_exists($callback)) {
      new Exception("Method $callback not exists");
    }
    self::$routes[$type][$pattern] = $callback;
  }


  public static function process($method, $uri) {
    if (in_array($method, array('GET', 'POST'))) {
      new Exception("Request method should be GET or POST");
    }
    $active_routes = self::$routes[$method];
    foreach ($active_routes as $pattern => $callback) {
      if (preg_match_all("/$pattern/", $uri, $matches)) {
        $array=array();
            for($i=1;$i<count($matches);$i++){
                $array[$i]=$matches[$i][0];
            }
            return call_user_func_array($callback, $array);
      }
    }
   }
}
?>