<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('/back/services/all', compact('services'));
    }

    public function create()
    {
        $services = Service::all();
        if (count($services) >= 4) {
            return redirect()->back()->with('message', 'Cannot create more than five elements');
        } else {
            return view('/back/services/create', compact('services'));
        }
        
    }

    public function store(Request $request)
    {
        $services = new Service();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
            'icon' => 'required',
        ]);
        $services->title = $request->title;
        $services->description = $request->description;
        $services->button_text = $request->button_text;
        $services->button_link = $request->button_link;
        $services->icon = $request->icon;
        $services->updated_at = now();
        $services->save();
        return redirect()->route('services.index')->with('message', 'Element service created');
    
    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('/back/services/edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $services = Service::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
            'icon' => 'required',
        ]);
        $services->title = $request->title;
        $services->description = $request->description;
        $services->button_text = $request->button_text;
        $services->button_link = $request->button_link;
        $services->icon = $request->icon;
        $services->updated_at = now();
        $services->save();
        return redirect()->route('services.index')->with('message', 'Element service updated');

    }

    public function destroy($id)
    {
        $servicesarray = Service::all();
        $services = Service::find($id);
        
        if (count($servicesarray) > 1) {
            $services->delete();
            return redirect()->back()->with('message', 'Element service deleted');
        } else {      
            return redirect()->back()->with('message', 'Cannot delete all elements');
        }
        
    }

    public function show($id)
    {
        $services = Service::find($id);
        return view('/back/services/show', compact('services'));
    }
}
