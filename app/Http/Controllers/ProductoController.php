<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function index() {
        return view('products.index', [
            'productos' => Producto::all()
        ]);
    }

    public function store(Request $r)
    {
        if($r->id == 0) {
            $uniqueId = (string) Str::uuid();
            $extension   = $r->file('imagen')->getClientOriginalExtension();
            $imageName   =   $uniqueId . '.' . $extension;
            $r->file('imagen')->storeAs('productos', $imageName, 'public');

            $data   =   $r->except(['_token', 'imagen', 'id']);
            $data['rutaImagen']     =   $imageName;
            Producto::create($data);

            return '<script>alert("Registered Successfully!");location.href="'.route('productos').'"</script>';
        }
        else {
            $item = Producto::find($r->id);
            if(empty($item))
                return redirect()->route('productos');
        
            if($r->hasFile('imagen')) {
                $uniqueId = (string) Str::uuid();
                $extension = $r->file('imagen')->getClientOriginalExtension();
                $imageName = $uniqueId . '.' . $extension;
                $r->file('imagen')->storeAs('productos', $imageName, 'public');
        
                // Delete old image
                if(Storage::disk('public')->exists('productos/'.$item->rutaImagen)) 
                    Storage::disk('public')->delete('productos/'.$item->rutaImagen);
        
                $item->rutaImagen = $imageName;
            }
        
            $data = $r->except(['_token', 'imagen', 'id']);
            foreach($data as $key => $value) {
                $item->$key = $value;
            }
        
            $item->save();
        
            return '<script>alert("Successfully updated!");location.href="'.route('productos').'"</script>';
        }
    }
    

    public function delete($id) {
        $item   =   Producto::find($id);
        if(empty($item))
            return redirect()->route('productos');
        Producto::where('id', $id)->delete();
        if(Storage::disk('public')->exists('productos/'.$item->rutaImagen)) 
            Storage::disk('public')->delete('productos/'.$item->rutaImagen);
        return '<script>alert("Successfully removed!");location.href="'.route('productos').'"</script>';
    } 
}
