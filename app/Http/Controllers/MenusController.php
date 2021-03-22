<?php

namespace App\Http\Controllers;


use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Gate;
use Hash;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', ['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'price' => 'required|max:7',
            'img' => 'required|mimes:jpeg,png,jpg|dimensions:max_width=600,max_height=400'
            ]);
            
            $imgName = '../../image/' . $request->img->getClientOriginalName() . '-' . time()
            . '.' . $request->img->extension();

        $request->img->move(public_path('image'), $imgName);

        $menu = new Menu;
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->status = $request->status;
        $menu->img = $imgName;
        
        $menu->save();

        return redirect('/menu')->with('status','Menu di tambahkan!');

        // $imgName = $request->foto->getClientOriginalName() . '-' . time()
        //     . '.' . $request->foto->extension();

        // $request->foto->move(public_path('image'), $imgName);

        // Pengaduan::create([
        //     'tanggal_pengaduan' => $request->tanggal_pengaduan,
        //     'nik' => $request->nik,
        //     'kategori' => $request->kategori,
        //     'isi_laporan' => $request->isi_laporan,
        //     'foto' => $imgName
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('menu.detail', ['menu' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', ['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        Menu::where('id', $menu->id)
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status,
            ]);
        return redirect('/menu')->with('status','Data menu diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if(file_exists($menu->img)) {
            Storage::delete($menu->img);
        }
        Menu::destroy($menu->id);
        return redirect('/menu')->with('status','Data Menu dihapus.');
    }
}
