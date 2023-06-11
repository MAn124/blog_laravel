<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
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
        $role = UserRoleEnum::asArray();
        $data = $this->model->paginate();
        return view("admin.$this->table.index", 
        ['data' => $data,
         'roles' => $role,
        ]);
    }

    public function show()
    {
        return 'ok';
    }
}
