<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventStoreController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function __invoke(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
        ]);

        $event = Event::create([
            'name' => $request->name,
            'date' => $request->date,
            'time' => $request->time,
            'description' => $request->description,
        ]);


        return new EventResource($event);
    }
}
