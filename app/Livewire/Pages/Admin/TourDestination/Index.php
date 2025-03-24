<?php

namespace App\Livewire\Pages\Admin\TourDestination;

use App\Models\Tour;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Index extends Component
{
    public $listeners = ['refreshTourDestination' => '$refresh'];

    public function delete($key) {
        $id = decrypt($key);

        Tour::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.pages.admin.tour-destination.index', [
            'tours' => Tour::latest()->get()
        ]);
    }
}
