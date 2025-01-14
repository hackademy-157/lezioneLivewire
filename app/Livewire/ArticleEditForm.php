<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ArticleEditForm extends Component
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

    public $articleId;



    public function mount($articleId){
        $article = Article::findOrFail($articleId);
        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->content = $article->content;
        $this->articleId = $article->id;
    }

    public function updateArticle(){
        $article = Article::findOrFail($this->articleId);
        $article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content
        ]);
        return redirect(route('article.index'));
    }


    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
