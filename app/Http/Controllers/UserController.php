<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //tambah data user dengan Eloquent Model
        // $data = [
            /*'username' => 'customer-1',
            'nama' => 'Pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 5*/
            
        // ];

        /*$data =[
            'nama' => 'Pelanggan Pertama'
        ];
        //UserModel::insert($data); //tambahkan data ke tabel m_user
        UserModel::where('username', 'customer-1')->update($data);
        // coba akses model UserModel
        $user = UserModel::all(); //ambil semua data dari tabel m_user
        return view('user', ['data' => $user]); */

       /* $data = [
            'level_id' => 2,
            'username' => 'manager_dua',
            'nama' => 'Manager 2',
            'password' => Hash::make('12345')
        ]; */
       /* $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];   
        UserModel::create($data);
                       
        $user = UserModel::all();
        return view('user', ['data' => $user]); */

        //$user = UserModel::firstwhere('level_id', 1);
        //$user = UserModel::find(1);
        //$user = UserModel::findOr(20,['username', 'nama',], function () {abort(404);
        //    });
        //$user = UserModel::findOrFail(1);
        //$user = UserModel::where('username', 'manager9')->firstOrFail();
        //$user = UserModel::where('level_id', 2)->count();
        //dd($user);
        $user = UserModel::where('level_id')->count();
        return view('user', ['data' => $user]);
    }
}
