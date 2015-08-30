<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\View ;

class ShowController extends Controller {

    public function index ($id) {
        return view('admin.show')->withShow(View::find($id));
    }
}
