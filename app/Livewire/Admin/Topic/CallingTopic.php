<?php

namespace App\Livewire\Admin\Topic;

use App\Models\Topic;
use Livewire\Attributes\On;
use Livewire\Component;

class CallingTopic extends Component
{

    public $search = "";
    public function deleteTopic($id){
        $topic = Topic::findOrFail($id);
        $topic ->delete();
        session()->flash('message','Topic deleted successfully!');
    }
    #[On('topic created')]

    public function render()
    {
        
        $data['topics'] = Topic::where('topic_name','LIKE',"%".$this->search ."%")->get();
        return view('livewire.admin.topic.calling-topic',$data);
    }
}
