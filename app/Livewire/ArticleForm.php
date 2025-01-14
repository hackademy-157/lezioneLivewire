<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ArticleForm extends Component
{   
    #[Validate([
        'title' => 'required|min:3',
    ], message: [
        'required' => 'Il :attribute richiesto',
        'min' => 'Il :attribute e troppo corto',
    ])]
    public $title;

    #[Validate([
        'subtitle' => 'required|min:3',
    ], message: [
        'required' => 'Il :attribute richiesto',
        'min' => 'Il :attribute e troppo corto',
    ])]
    public $subtitle;

    #[Validate([
        'content' => 'required|min:3',
    ], message: [
        'required' => 'Il :attribute richiesto',
        'min' => 'Il :attribute e troppo corto',
    ])]
    public $content;

    public function save(){

        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-form');
    }
}
