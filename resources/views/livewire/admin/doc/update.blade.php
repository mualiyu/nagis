<?php

use App\Models\Information;
use function Livewire\Volt\{state, rules, usesFileUploads, mount, computed};

usesFileUploads();

state('information');

state([
    'name'=> '',
    'description'=> '',
]);

rules([
    'name'=> 'required|min:6',
    'description'=> 'required',
]);

mount(function ($information) {
    $this->name = $this->information->name;
    $this->description = $this->information->description;
});

$submit = function () {
    $this->validate();

    Information::where('id', '=', $this->information->id)->update([
      "name"=>$this->name,
      "description"=>$this->description,
    ]);

    session()->flash('message', 'This document categories has been updated.');

    sleep(5);

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
          <div class="col-12 d-flex justify-content-end">
            <button
              type="submit"
              class="btn btn-primary me-1 mb-1"
            >
              Update
            </button>
            <div wire:loading>
                Processing...
            </div>
          </div>
        </div>
      </form>
</div>
