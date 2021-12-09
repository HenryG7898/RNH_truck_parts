<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\item;

class Product extends Component
{
    public $category_nm;
    public $product_nm;
    public $product_image;
    public $price;
    public $qty;
    public $status;

    public function render()
    {
        return view('livewire.product');
    }

    protected $rules = [
        'category_nm' => ['required','string'],
        'product_nm' => ['required','string'],
        'product_image'=> ['required','string'],
        'price' => ['required','numeric'],
        'qty' =>['required','numeric'],
        'status' => ['required','string']
    ];

    public function addproduct(){

        $this->validate();

        item::create([
            'category_id' => $this->category_nm,
            'product_nm' => $this->product_nm,
            'product_image' => $this->product_image->store('public'),
            'price' => $this->price,
            'qty' => $this->qty,
            'status' => $this->status,
        ]);
    }

    public function updated()
    {
        $this->validate();
    }
}
