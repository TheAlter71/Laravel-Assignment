<?php

namespace App\Http\Controllers;

use App\Models\color;

use Illuminate\Http\Request;

class colorController extends Controller
{
    public function session()
    {
        session_start();
        $_SESSION['option'] = 'color';
    }

    public function color()
    {
        $this->session();

        $colors = color::all();

        return view('color/color', [
            'colors' => $colors,
        ]);
    }

    public function create()
    {
        $this->session();
        return view('color/create');
    }

    public function store(Request $request)
    {
        $this->session();
        $color = new color();

        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;
        $color->save();

        return redirect()->route('color');
    }

    public function update($id)
    {
        $this->session();
        $color = color::find($id);

        return view('color/update', [
            'color' => $color,
        ]);
    }

    public function edit(Request $request)
    {
        $this->session();
        $color = color::find($request->id);
        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;

        $color->save();

        return redirect()->route('color');
    }

    public function delete($id)
    {
        $this->session();
        $color = color::find($id);
        $color->delete();

        return redirect()->route('color');
    }
}