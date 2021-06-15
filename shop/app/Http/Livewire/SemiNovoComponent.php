<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SemiNovoComponent extends Component
{
    public $searchResult = [];

    public function render()
    {
        $response =  Http::get('https://60c6aecd19aa1e001769f8e1.mockapi.io/veiculos');
        $this->searchResult = $response->json();
        return view('livewire.semi-novo-component')->layout('layouts.base');
    }
}
