<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    private  $model;

    private $table;

    public function __construct()
    {
        $this->model = User::query();
        $this->table = (new User())->getTable();
        View()->share('title', $this->table);
        View()->share('table', $this->table);
    }

    public function index() {

        $data = $this->model->paginate();
        return view("admin.$this->table.index", 
        ['data' => $data]);
    }
}
