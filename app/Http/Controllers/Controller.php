<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var array
     */
    public $data = [];

    /**
     * Set a dynamic property on the base controller.
     *
     * @param mixed $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * Get a dynamic property from the base controller.
     *
     * @param mixed $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->data[$name];
    }

    /**
     * Determine if a dynamic property is set on the base controller.
     *
     * @param mixed $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // You can perform actions here that run for all controllers that extend this base controller.
            return $next($request);
        });
    }

    /**
     * Gestion des accents en français dans les enregistrements JSON
     */
    protected function jsonResponse($data, $code = 200)
{
    return response()->json($data, $code,
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
}
}
