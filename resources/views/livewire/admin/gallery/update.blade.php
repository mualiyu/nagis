<?php

use App\Models\Gallery;
use function Livewire\Volt\{state, rules, usesFileUploads, mount, computed};

usesFileUploads();

state('gallery');

state([
    'title'=> '',
    'image'=> null,
]);

mount(function ($gallery) {
    $this->title = $this->gallery->title;
    $this->image = null;
});

rules([
    'title'=> 'required',
    'image'=> 'nullable|max:2024',
]);

$submit = function () {
    $this->validate();

    if ($this->image) {
       Storage::delete($this->gallery->image);
    }

    Gallery::where("id", '=', $this->gallery->id)->update([
      "title"=>$this->title,
      "image"=> $this->image ? $this->image->store('gallery') : $this->gallery->image,
    ]);

    session()->flash('message', 'This content has been updated.');

    $this->gallery->image = Gallery::where("id", '=', $this->gallery->id)->get()[0]->image;

    sleep(5);

    // header('location: /admin/posts');

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
                <img src="{{url('/storage/'.$this->gallery->image)}}" alt="{{url('/storage/'.$this->gallery->image)}}" style="height:300px; width:auto;">
            </div>
            <div class="form-group">
              <label for="email-id-column">Update Galley Picture</label>
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

{{-- <script src="{{asset('/admin/assets/extensions/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('/admin/assets/static/js/pages/tinymce.js')}}"></script>

<script src="{{asset('/admin/assets/compiled/js/app.js')}}"></script> --}}
