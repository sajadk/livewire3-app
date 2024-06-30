<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
	public $todo = '';

	public $todos = [];

    public function render()
    {
        return view('livewire.todos');
    }

    public function mount()
    {
    	$this->todo = 'type here..';
    	$this->todos = [

    		'Laravel',
    		'Livewire'

    	];
    }
    //updated can be updatedTodo
    public function updatedTodo($value)
    {
       $this->todo = strtoupper($value);

    }

    public function add()
    {

    	$this->todos[] = $this->todo;

    	$this->reset('todo'); 
    }
}
