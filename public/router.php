<?php

class Router
{
    private array $routes;

    public function register(string $requestMethod, string $route, callable|array $action): self
    {
        $this->routes[$requestMethod][$route] = $action;
        return $this;
    }

    public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }

    public function post(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }

    public function routes(): array
    {
        return $this->routes;
    }

    public function resolve(string $requestUri, string $requestMethod, $productId = null)
    {
        $route = strtok($requestUri, '?');
        $action = $this->routes[$requestMethod][$route] ?? null;

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class) && method_exists($class, $method)) {
                $classInstance = new $class();
                return call_user_func_array([$classInstance, $method], [$productId]);
            }
        }
    }
}
