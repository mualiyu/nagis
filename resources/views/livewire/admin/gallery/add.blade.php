<?php
use App\Models\Gallery;
use function Livewire\Volt\{state, rules, usesFileUploads, mount, computed};

usesFileUploads();

state([
    'title'=> '',
    'image'=> null,
]);

rules([
    'title'=> 'required',
    'image'=> 'required|image|max:2024',
]);

$submit = function () {
    $this->validate();
    Gallery::create([
      "title"=>$this->title,
      "image"=>$this->image->store('gallery'),
    ]);

    $this->title = '';
    $this->image = null;

    session()->flash('message', 'New gallery has been uploaded.');

    sleep(5);

    header('location: /admin/galleries');

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
              <label for="email-id-column">Picture</label>
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
