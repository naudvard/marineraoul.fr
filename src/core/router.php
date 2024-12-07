<?php 
class Router {
	private $routes = [];

	public function addRoute($method, $route, $callback) {
		$this->routes[] = [
			'method' => strtoupper($method),
			'route' => $this->parseRoute($route),
			'callback' => $callback,
		];
	}

	public function dispatch($method, $uri) {
		foreach ($this->routes as $route) {
			if ($this->matchRoute($route, $method, $uri)) {
				$params = $this->extractPathParams($route['route'], $uri);
				return $this->call($route['callback'], $params);
			}
		}

		http_response_code(404);
		echo "404 - Not Found, redirecting to index";
		header("Location: ".DOMAIN_URL);
		exit();
	}

	private function parseRoute($route) {
		$pattern = preg_replace('#\{([\w]+)\}#', '([^/]+)', $route);
		return [
			'pattern' => "#^$pattern$#",
			'params' => $this->extractPathParamKeys($route),
		];
	}

	private function extractPathParamKeys($route) {
		preg_match_all('#\{([\w]+)\}#', $route, $matches);
		return $matches[1];
	}

	private function matchRoute($route, $method, $uri) {
		if ($route['method'] != strtoupper($method)) {
			return false;
		}
		if (!preg_match($route['route']['pattern'], $uri)) {
			return false;
		}
		return true;
	}

	private function extractPathParams($route, $uri) {
		preg_match($route['pattern'], $uri, $matches);
		array_shift($matches);
		return array_combine($route['params'], $matches);
	}

	private function call($callback, $params) {
		if (!is_callable($callback)) {
			throw new Exception("Invalid route callback.");
		}

		return call_user_func_array($callback, $params);
	}
}
?>