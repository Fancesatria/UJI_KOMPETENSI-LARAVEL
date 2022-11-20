<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $image;
    public $status;
    public $link;

    public $newimage;
    public $slider_id;
    
    public function mount($slider_id){
        $slider = HomeSlider::find($slider_id);
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->price = $slider->price;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->link = $slider->link;
        $this->slider_id = $slider->id;
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'title'=>'required',
            'subtitle'=>'required',
            'price'=>'required | numeric',
            'link'=>'required',
        ]);
    }

    public function editSlide(){
        $this->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'price'=>'required | numeric',
            'link'=>'required', 
        ]);
        $slider = HomeSlider::find($this->slider_id);
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp. '-' .$this->newimage->extension();
            $this->newimage->storeAs('sliders',$imageName);
            $slider->image = $imageName;
        }
        $slider->status = $this->status;
        $slider->link = $this->link;
        $slider->id = $this->slider_id;
        $slider->save();
        session()->flash('message','Slide has been changed !');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.base');
    }
}
