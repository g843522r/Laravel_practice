<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller {
    
    //以下にactionを追加200705(08の課題5)
    public function add() {
        return view('admin.profile.create');
    }
    
    public function create() {
        return redirect('admin/profile/create');
    }
    
    public function edit() {
        return view('admin.profile.edit');
    }
    
    public function update() {
        return redirect('admin/profile/edit');
    }
    
}
