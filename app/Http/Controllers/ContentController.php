<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * 投稿一覧ページの表示
     *
     * @return void
     */
    public function list()
    {
        return view('contents.list');
    }

    public function create()
    {
        # code...
    }
    
    public function update()
    {
        # code...
    }

    public function save()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }
}
