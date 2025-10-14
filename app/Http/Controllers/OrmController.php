<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Publication;
use App\Models\Seller;

class OrmController extends Controller
{
    public function index()
    {
        return [
            'usuarios_con_roles' => User::with('roles')->get(),
            'publicaciones_con_categoria' => Publication::with('category')->get(),
            'vendedor_con_publicaciones' => Seller::with('publications')->get(),
        ];
    }
}
