<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HabitoController extends Controller
{
    public function index()
    {
        $habitos = DB::table('habitos')->get();
        return view('habitos.index', compact('habitos'));
    }

    public function create()
    {
        return view('habitos.create');
    }

    public function store(Request $request)
    {
        DB::table('habitos')->insert([
            'nombre' => $request->nombre,
            'habito' => $request->habito,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'estado' => $request->estado,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('habitos.index');
    }

    public function edit($id)
    {
        $habito = DB::table('habitos')->where('id', $id)->first();
        return view('habitos.edit', compact('habito'));
    }

    public function update(Request $request, $id)
    {
        DB::table('habitos')
            ->where('id', $id)
            ->update([
                'nombre' => $request->nombre,
                'habito' => $request->habito,
                'fecha' => $request->fecha,
                'hora' => $request->hora,
                'estado' => $request->estado,
                'updated_at' => now(),
            ]);

        return redirect()->route('habitos.index');
    }

    public function destroy($id)
    {
        DB::table('habitos')->where('id', $id)->delete();
        return redirect()->route('habitos.index');
    }
}
