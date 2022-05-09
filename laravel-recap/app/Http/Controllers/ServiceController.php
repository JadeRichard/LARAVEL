<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function create()
    {
        $services = Service::all();
        return view('service.create', compact('services'));
    }

    public function store(Request $request)
    {
        $service = new Service();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
            'icon' => 'required',
        ]);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->button_text = $request->button_text;
        $service->button_link = $request->button_link;
        $service->icon = $request->icon;
        $service->updated_at = now();
        $service->save();
        return redirect()->route('service.index')->with('message', 'Element service created');
    
    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('service.edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
            'icon' => 'required',
        ]);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->button_text = $request->button_text;
        $service->button_link = $request->button_link;
        $service->icon = $request->icon;
        $service->updated_at = now();
        $service->save();
        return redirect()->route('service.index')->with('message', 'Element service updated');

    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.index')->with('message', 'Element service deleted');
    }
}
