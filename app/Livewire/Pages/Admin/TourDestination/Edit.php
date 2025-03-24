<?php

namespace App\Livewire\Pages\Admin\TourDestination;

use App\Models\Tour;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;
    public $id;

    public $name;
    public $price;
    public $description;
    public $image;
    public $image_replace;

    public function rules() {
        return [
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'required',
            'image_replace' => 'image:jpg,png|required',
        ];
    }

    #[On('initEditTourDestination')]
    public function initEditTourDestination($key) {
        $this->id = decrypt($key);

        $tour = Tour::find($this->id);
        $this->name = $tour->name;
        $this->price = $tour->ticket_price;
        $this->description = $tour->description;
        $this->image = $tour->image;
    }

    public function edit() {
        $this->validate();
        $tour = new Tour();

        if ($this->image_replace) {
            try {
                $uploaded = $this->image_replace->store(path: 'uploads/images');
                $tour->image = explode('uploads/images/', $uploaded)[1];
            } catch (\Throwable $th) {
                dump($th->getMessage());
            }
        }

        try {
            $tour->name = $this->name;
            $tour->slug = Str::slug($this->name);
            $tour->ticket_price = $this->price;
            $tour->description = $this->description;
            $tour->save();

            $this->reset();
            $this->dispatch('refreshTourDestination');
        } catch (\Exception $e) {
            dump($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pages.admin.tour-destination.edit');
    }
}
