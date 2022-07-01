<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class BlogPost extends Component
{
    public $blogPost;

    public function mount($blogPost)
    {
        $this->blogPost = $blogPost;
    }

    public function render()
    {
        return view('livewire.website.blog-post');
    }
}
