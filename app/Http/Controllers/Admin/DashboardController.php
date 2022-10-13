<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Product;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Slider;
use App\Models\Query;
use App\Models\Service;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // index
    public function index()
    {
        $users = count(User::all());
        $slider = count(Slider::all());
        $service = count(Service::all());
        $photos = count(Gallery::all());
        return view('pages.admin.home', compact('users', 'slider', 'service','photos'));
    }
}
