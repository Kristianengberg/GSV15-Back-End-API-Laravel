<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventIndexController extends Controller
{
    public function __invoke()
    {
        return EventResource::collection(Event::orderBy('date', 'desc')->paginate(5));
    }
}
