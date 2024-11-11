<?php

namespace App\Livewire\Admin\Post;

use App\Models\Posts;
use Livewire\Component;

class CallingPost extends Component
{
    public function render()
    {
        $data['posts'] = Posts::all();
        return view('livewire.admin.post.calling-post',$data);
    }

    public function deletePost($id){
        Posts::find($id)->delete();
        session()->flash('message','Post deleted successfully');
        return redirect()->route('admin.posts');
    }
}
