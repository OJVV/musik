<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Service;
use Livewire\Component;
use App\Models\Portfolio;

class HomeLayout extends Component
{
    public function render()
    {
   // Servicios: ordenamos por la fecha de creación, más reciente primero
   $services = Service::orderBy('created_at', 'DESC')->limit(8)->get();

   // Portafolios: ordenamos por la fecha de creación, más reciente primero
   $portfolios = Portfolio::orderBy('created_at', 'DESC')->limit(6)->get();

   $events = Event::orderBy('titulo', 'DESC')->get();
       
        return view('livewire.home-layout', ['services' => $services, 'portfolios' => $portfolios, 'events' => $events ])->layout('layouts.base');
    }
}
