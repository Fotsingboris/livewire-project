<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class Comments extends Component
{

    use WithPagination;
    public $newComment;
    public $image;
    public $ticketId;

    protected $listeners = [
        'fileUpload' => 'handleFileUpload',
        'ticketSelected',
    ];

    public function ticketSelected($ticketId)
    {
        $this->ticketId = $ticketId;
    }
    public function handleFileUpload($imageData)
    {
        $this->image = $imageData;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, ['newComment' => 'required|max:255']);
    }

    public function addComment()
    {
        $this->validate(['newComment' => 'required|max:255']);
        $image          = $this->storeImage();
        $createdComment = Comment::create([
            'body' => $this->newComment, 'user_id' => auth()->id(),
            'image' => $image,
            'support_tickets_id' => $this->ticketId,
        ]);
        $this->newComment = "";
        $this->newComment = "";
        session()->flash('message','Comment added successfully');
    }

    public function storeImage()
    {
        if (!$this->image) {
            return null;
        }
       
        $img = ImageManagerStatic::make($this->image)->encode('jpg');
        $name = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $img);
        return $name;

    }

    public function remove($commentId)
    {
        $comment = Comment::find($commentId);
        $comment->delete();
        Storage::disk('public')->delete($comment->image);
        session()->flash('message','Comment deleted successfully');
    }

    public function render()
    {
        return view('livewire.comments', [
            'comments' => Comment::where('support_tickets_id',$this->ticketId)->latest()->paginate(1),
        ]);
    }
}
