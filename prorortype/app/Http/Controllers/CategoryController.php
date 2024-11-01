<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private $model;

    public function __construct(){

        $this->model = new Category();
        $data = $this->model::all();
        return view('welcome')->with($data);

    }
}
