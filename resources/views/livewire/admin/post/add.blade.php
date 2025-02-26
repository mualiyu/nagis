<?php
use App\Models\Post;
use function Livewire\Volt\{state, rules, usesFileUploads, mount, computed};

usesFileUploads();

state([
    'title'=> '',
    'content'=> '',
    'image'=> null,
]);

rules([
    'title'=> 'required|min:6',
    'content'=> 'required',
    'image'=> 'required|image|max:2024',
]);

$submit = function () {
    $this->validate();
    Post::create([
      "user_id"=>Auth::user()->id,
      "title"=>$this->title,
      "content"=>$this->content,
      "image"=>$this->image->store('posts'),
      "date_posted"=>now(),
    ]);

    $this->title = '';
    $this->content = '';
    $this->image = null;

    session()->flash('message', 'New content has been posted.');

    sleep(5);

    header('location: /ng-admin/posts');

};


?>

<div>
    @if (session()->has('message'))
    <div  class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
    <form class="form" wire:submit.prevent="submit">
        <div class="row">
          <div class="col-md-12 col-12">
            <div class="form-group">
              <label for="first-name-column"> Title</label>
              <input
                type="text"
                id="first-name-column"
                class="form-control"
                placeholder="Title"
                name="title"
                wire:model='title'
              />
            </div>
            @error('title')
                <span class="danger" style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-12 col-12">
            <div class="form-group">
              <label for="company-column">Content</label>
              <!-- <input type="text" id="company-column" class="form-control"
                                name="company-column" placeholder="Company"> -->
              <textarea
                name="content"
                {{-- id="default" --}}
                cols="30"
                rows="10"
                wire:model='content'
                style="width: 100%;"
              ></textarea>
            </div>
            @error('content')
                <span class="danger" style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="col-md-12 col-12">
            <div class="form-group">
              <label for="email-id-column">Upload Cover Image</label>
              <input
                type="file"
                name="image"
                class="image-preview-filepond"
                wire:model='image'
              />
            </div>
            @error('image')
                <span class="danger" style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 d-flex justify-content-end">
            <button
              type="submit"
              class="btn btn-primary me-1 mb-1"
            >
              Submit
            </button>
            <div wire:loading>
                Processing...
            </div>
          </div>
        </div>
      </form>
</div>
{{--
<script src="{{asset('/admin/assets/extensions/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('/admin/assets/static/js/pages/tinymce.js')}}"></script>

<script src="{{asset('/admin/assets/compiled/js/app.js')}}"></script> --}}
