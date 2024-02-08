<?php

use App\Models\Information;
use App\Models\InformationDocument;
use function Livewire\Volt\{state, rules, usesFileUploads, mount, computed};

usesFileUploads();

state('information');

state([
    'name'=> '',
    'description'=> '',
    'file'=> null,
]);

rules([
    'name'=> 'required',
    'description'=> 'required',
    'file' => 'required|max:102400'
]);

$submit = function () {
    $this->validate();

    InformationDocument::create([
      "info_id"=>$this->information->id,
      "name"=>$this->name,
      "description"=>$this->description,
      "url"=>$this->file->store('documents')
    ]);

    $this->name = '';
    $this->description = '';
    $this->file = null;

    session()->flash('message', 'New Document uploaded.');

    sleep(5);

    header('location: /admin/informations/'. $this->information->id);

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
              <label for="first-name-column"> Name</label>
              <input
                type="text"
                id="first-name-column"
                class="form-control"
                placeholder="Name"
                name="name"
                wire:model='name'
              />
            </div>
            @error('name')
                <span class="danger" style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-12 col-12">
            <div class="form-group">
              <label for="company-column">Description</label>
              <!-- <input type="text" id="company-column" class="form-control"
                                name="company-column" placeholder="Company"> -->
              <textarea
                name="description"
                {{-- id="default" --}}
                cols="30"
                rows="10"
                wire:model='description'
                style="width: 100%;"
              ></textarea>
            </div>
            @error('description')
                <span class="danger" style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-12 col-12">
            <div class="form-group">
              <label for="email-id-column">Upload Document</label>
              <input
                type="file"
                name="file"
                class="image-preview-filepond"
                wire:model='file'
              />
            </div>
            @error('file')
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