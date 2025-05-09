<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class ShowEvent extends Component
{
    public function render()
    {
        $events = Event::orderBy('titulo', 'DESC')->get();
        return view('livewire.show-event',['events' => $events])->layout('layouts.base');
    }
}
