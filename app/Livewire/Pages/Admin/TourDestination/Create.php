<?php

namespace App\Livewire\Pages\Admin\TourDestination;

use App\Models\Tour;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $price;
    public $description;
    public $image;

    public function rules() {
        return [
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'required',
            'image' => 'image:jpg,png|required',
        ];
    }

    public function create() {
        $this->validate();
        $uploaded = null;

        try {
            $uploaded = $this->image->store(path: 'uploads/images');
        } catch (\Throwable $th) {
            dump($th->getMessage());
        }

        try {
            $tour = new Tour();
            $tour->name = $this->name;
            $tour->slug = Str::slug($this->name);
            $tour->ticket_price = $this->price;
            $tour->description = $this->description;
            $tour->image = explode('uploads/images/', $uploaded)[1];
            $tour->save();

            $this->reset();
            $this->dispatch('refreshTourDestination');
        } catch (\Exception $e) {
            dump($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pages.admin.tour-destination.create');
    }
}
