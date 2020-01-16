<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view*('admin.progile.create');
    }
    
    public function create()
    {
        return redirect("admin/profile/create");
    }
    
    public function edit()
    {
        return view("admin.profile.edit");
    }
    
    public function update()
    {
        return redirect('admin/profile/edit');
    }

#課題２　Controllerとはユーザーからのアクセスに対してデータを取得したりデータをユーザーに渡したりする中枢的な役割を果たす。
#課題３　Routingはユーザーからのアクセスを種類によってContollerの各Actionに振り分ける役割を果たす。
