<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = \App\Models\Store::paginate(10);
        return view('admin.stores.index', compact('stores'));
    }

    public function create(){
        $users = \App\Models\User::all(['id', 'name']);
        return view('admin.stores.create', compact('users'));
    }

    public function store(Request $request){
        $data = $request->all();

        $user = \App\Models\User::find($data['user']);
        $store = $user->store()->create($data);
        flash('success', 'Store created successfully.');

        return redirect()->route('admin.stores.index');
    }

    public function edit($store){
        $store = \App\Models\Store::findOrFail($store);
        
        return view('admin.stores.edit', compact('store'));
    }

    public function update(Request $request, $store){
        $data = $request->all();
        $store = \App\Models\Store::find($store);
        $store->update($data);
        flash('success', 'Store updated successfully.');

        return redirect()->route('admin.stores.index');
    }

    public function destroy($store)
    {
        $store = \App\Models\Store::find($store);
        $store->delete();

        flash('success', 'Store deleted successfully.');

        return redirect()->route('admin.stores.index');
    }
}
