<div>
    <form class="m-5" wire:submit="updateArticle">
        <div class="mb-3">
          <label class="form-label">title</label>
          <input type="text" class="form-control" wire:model.blur="title">
          <div>@error('title') {{ $message }} @enderror</div>

        </div>
        <div class="mb-3">
          <label class="form-label">subtitle</label>
          <input type="text" class="form-control"  wire:model.blur="subtitle">
          <div>@error('subtitle') {{ $message }} @enderror</div>

        </div>
        <div class="mb-3">
            <label class="form-label">content</label>
           <textarea class="form-control" cols="30" rows="10"  wire:model.blur="content"></textarea>
           <div>@error('content') {{ $message }} @enderror</div>

          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
