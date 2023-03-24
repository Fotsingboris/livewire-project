<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Comments extends Component
{
    public $comments;

    public $newComment;

    public function mount()
    {
        $inintialComments = Comment::latest()->get();
        $this->comments = $inintialComments;
    }

    public function addComment()
    {
        if ($this->newComment == '') {
            return;
        }
        $createdComment = Comment::create(['body' => $this->newComment, 'user_id' => 1]);
        $this->comments->prepend($createdComment);
        $this->newComment = "";
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
