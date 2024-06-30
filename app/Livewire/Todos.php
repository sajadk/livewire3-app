<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
	public $todo = '';

	public $todos = [

     'Laravel',
     'Livewire'

	];

    public function render()
    {
        return view('livewire.todos');
    }

    public function add()
    {
    	
    	$this->todos[] = $this->todo;

    	$this->reset('todo'); 
    }
}
