<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function showErrors()
    {
        return view('errores');
    }

    public function editMessage($id)
    {
        $message = Message::findOrFail($id); 
        return view('editar_mensaje', compact('message')); 
    }

    public function updateMessage(Request $request, $id)
    {
        $opcionesSubrayado = ['underline', 'none'];
        $opcionesNegrita = ['bold', 'normal'];

        $validated = $request->validate([
            'subrayado' => 'required|string|in:' . implode(',', $opcionesSubrayado),
            'negrita' => 'required|string|in:' . implode(',', $opcionesNegrita),
        ]);

         // Comprobar si hay errores
         if ($validator->fails()) {
            return redirect()->route('message.errors')->withErrors($validator)->withInput();
        }

        $message = Message::findOrFail($id); 
        $message->update($validated); 

        return redirect()->route('messages.show')->with('success', 'Mensaje actualizado correctamente.');
    }
}