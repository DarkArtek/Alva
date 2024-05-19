<?php

namespace Modules\Alva\Http\Controllers\Admin;

use App\Contracts\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /*
     * Display a resource listing
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        return view('alva::admin.index');
    }

    /*
     * Form for creating a new resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function create(Request $request)
    {
        return view('alva::admin.create');
    }

    /**
     * Store a resource into storage.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the form for edit a resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function edit(Request $request)
    {
        return view('alva::admin.edit');
    }

    /**
     * Show the resource.
     * @param Request $request
     *
     * @return mixed
     */
    public function show(Request $request)
    {
        return view('alva::admin.show');
    }

    /**
     * Update the resource
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function update(Request $request)
    {
    }

    /**
     * Destroy the resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function destroy(Request $request)
    {
    }

}
