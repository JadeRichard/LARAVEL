<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    
    
    public function index()
    {
        $services = Service::all();
        return view("/back/services/all",compact("services"));
    }
    public function show(Service $service)
    {
        return view("/back/services/show",compact("service"));
    }
    public function edit(Service $service)
    {
        $services = Service::all();
        return view("/back/services/edit",compact("service", "services"));
    }
    public function update(Service $service, Request $request)
    {
        $this->authorize('update', $service);
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->updated_at = now();
        $service->save();
        return redirect()->route("services.index")->with('message', "Service updated");
    }

    public function destroy(Service $service){
        $this->authorize('delete', $service);
        $service->delete();
        return redirect()->back()->with('message', 'Service destroyed');
    }

    public function create(){
        $service = Service::all();
        return view("back.services.create", compact("service"));
    }

    public function store(Request $request){
        
        $this->authorize('create', Service::class);
        $service = new Service;
        $validated = $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
        ]);
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->updated_at = now();
        $service->save();
        return redirect()->route("services.index")->with('message', 'Service created');
    }
}
