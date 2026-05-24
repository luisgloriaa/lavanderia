<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderReadyMail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $orders = Order::all();

    return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'descripcion' => 'required',
        'total' => 'required|numeric',
        'fecha_entrega' => 'required|date',
    ]);

    Order::create([
        'user_id' => auth()->id(),
        'descripcion' => $request->descripcion,
        'total' => $request->total,
        'estado' => 'Pendiente',
        'fecha_entrega' => $request->fecha_entrega,
        'imagen' => $request->imagen ?? null,
    ]);

    return redirect('/orders');
}

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
{
    return view('orders.show', compact('order'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $order->estado = $request->estado;
    $order->save();

    if ($order->estado == 'Listo') {

        Mail::to($order->user->email)
            ->send(new OrderReadyMail($order));
    }

    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                   if(auth()->user()->role != 'admin'){
        abort(403);
    }
//
    }
}
