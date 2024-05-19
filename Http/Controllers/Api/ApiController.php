<?php

namespace Modules\Alva\Http\Controllers\Api;

use App\Contracts\Controller;
use Illuminate\Http\Request;

/**
 * class ApiController
 * @package Modules\Alva\Http\Controllers\Api
 */
class ApiController extends Controller
{
    /**
     *  Just send out a message
     *
     * @params Request $request
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->message('Hello World!');
    }

    /**
     * Handles "/hello"
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function hello(Request $request)
    {
        return response()->json([
            'name' => Auth::user()->name,
        ]);
    }
}
