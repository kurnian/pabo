<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pond;
use Auth;

class PondController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('map');
    }

    public function list()
    {
        $ponds = Pond::where('id_user', Auth::id())->get();
        return view('pond_list', ['tables' => $ponds]);
    }

    public function viewadd()
    {
        return view('pond_add');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'luas' => 'required',
            'kedalaman' => 'required',
            'jenis_ikan' => 'required',
            'lat' => 'required',
            'lon' => 'required'
        ]);

        $request["id_user"] = Auth::id();
        $author = Pond::create($request->all());
        return redirect("pond/list");
    }
}
