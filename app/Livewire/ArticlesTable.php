<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{
    public $search = '';
    public $order = 'asc';

    public function deleteArticle($id){
        Article::find($id)->delete();
    }

    public function invert(){
        $this->order = $this->order == 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        if ($this->search == '') {
            $articles = Article::all();
        } else {
            $articles = Article::where('title' , 'LIKE' , '%'.$this->search.'%')->get();
        }

        if ($this->order != 'asc') {
            $articles = $articles->sortDesc();
        }
        
        return view('livewire.articles-table' , compact('articles'));
    }
}
