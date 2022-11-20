<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $image;
    public $status;
    public $link;

    public function mount(){
        $this->status = 0;
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'title'=>'required',
            'subtitle'=>'required | unique:home_sliders',
            'price'=>'required | numeric',
            'link'=>'required',
            'image'=>'required | mimes:jpg, jpeg, png | unique:home_sliders'
        ]);
    }

    public function addSlide(){
        $this->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'price'=>'required | numeric',
            'link'=>'required',
            'image'=>'required | mimes:jpg, jpeg, png'
        ]);
        $slider = new HomeSlider();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $imageName = Carbon::now()->timestamp.'-'.$this->image->extension();
        $this->image->storeAs('sliders',$imageName);
        $slider->image = $imageName;
        $slider->status = $this->status;
        $slider->link = $this->link;
        $slider->save();
        session()->flash('message','Slide has been added !');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
