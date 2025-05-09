<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;

class ShowPortfolio extends Component
{
    public function render()
    {
        $portfolios = Portfolio::orderBy('title', 'DESC')->get();
        return view('livewire.show-portfolio', ['portfolios' => $portfolios])->layout('layouts.base');
    }
}
