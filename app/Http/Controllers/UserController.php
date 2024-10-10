<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {

        $user = UserModel::findOr(20, ['username', 'nama'],function () {
            abort(404);
        });
            // $data = [
            //     'username' => 'customer-1',
            //     'nama' => 'Pelanggan',
            //     'password' => Hash::make('12345'),
            //     'level_id' => 4
            // ];
            // $data = [
            //     'level_id' => 2,
            //     'username' => 'manager_tiga',
            //     'nama' => 'Manager 3',
            //     'password' => Hash::make('12345')
            //     ];
            //     UserModel::create($data);
                
            // $data = [
            //     'nama' => 'Pelanggan Pertama',  
            // ];
            // UserModel::where('username', 'customer-1')->update($data); // update data user
    // $user = UserModel::all(); // ambil semua data dari tabel m_user
    return view('user', ['data' => $user]);
    }
}