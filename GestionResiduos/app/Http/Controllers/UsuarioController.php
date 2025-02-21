<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'contraseña' => 'required|string|min:8',
            'rol' => 'required|string|max:50',
        ]);

        $usuario = new Usuario();
        $usuario->nombre = $validatedData['nombre'];
        $usuario->email = $validatedData['email'];
        $usuario->contraseña = Hash::make($validatedData['contraseña']);
        $usuario->rol = $validatedData['rol'];
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email,'.$id,
            'contraseña' => 'nullable|string|min:8',
            'rol' => 'required|string|max:50',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->nombre = $validatedData['nombre'];
        $usuario->email = $validatedData['email'];
        if (!empty($validatedData['contraseña'])) {
            $usuario->contraseña = Hash::make($validatedData['contraseña']);
        }
        $usuario->rol = $validatedData['rol'];
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
