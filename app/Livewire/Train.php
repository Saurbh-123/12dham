<?php

namespace App\Livewire;

use App\Models\Train as ModelsTrain;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Train extends Component
{
    #[Validate('required',)]
    public $name = '';
    #[Validate('required','number')]
    public $train_code = '';
    public $reach_time = '';
    public $train_type = '';
    public $start_time = '';


    public function add_train(Request $request){
        $train  = new ModelsTrain();
        $train->name = $this->name;
        $train->train_code = $this->train_code;
        $train->train_type = $this->train_type;
        $train->reach_time = $this->reach_time;
        $train->start_time = $this->start_time;
        $train->created_at = now();
        $train->updated_at = now();
        $train->save();

        Session()->flash('success','Train added successfully');
       return $this->redirect('train_list');
    }
    public function render()
    {
        return view('livewire.train');
    }
}
