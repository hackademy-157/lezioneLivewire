<x-layout>
    <div class="container-fluid bg-warning">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-1 my-5">Modifica</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 border shadow rounded">
                <livewire:article-edit-form 
                    articleId="{{$article->id}}"
                />
            </div>
        </div>
    </div>
</x-layout>