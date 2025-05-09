<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServicesPage extends Component
{
    public function render()
    {
        $services= Service::orderBy('title', 'DESC')->get();
        return view('livewire.show-services-page', ['services' => $services])->layout('layouts.base');
    }
}
