<?php
use App\Models\Information;
use App\Models\InformationDocument;
use function Livewire\Volt\{state, rules, usesFileUploads, mount, computed};

usesFileUploads();

state('informationDocument');

state([
    'name'=> '',
    'description'=> '',
    'file'=> null,
]);

rules([
    'name'=> 'required|min:6',
    'description'=> 'required',
    'file' => 'nullable'
]);

mount(function ($informationDocument) {
    // $this->count = count($users);
    $this->name = $this->informationDocument->name;
    $this->description = $this->informationDocument->description;
    $this->file = null;
});

$submit = function () {
    $this->validate();

    if ($this->file) {
        Storage::delete($this->informationDocument->url);
    }

    InformationDocument::where('id', '=', $this->informationDocument->id)->update([
      "name"=>$this->name,
      "description"=>$this->description,
      "url"=>$this->file ? $this->file->store('documents') : $this->informationDocument->url,
    ]);

    $this->informationDocument->url = InformationDocument::where('id', '=', $this->informationDocument->id)->get()[0]->url;

    session()->flash('message', 'New Document uploaded.');

    sleep(5);

    // header('location: /ng-admin/informations/'. $this->information->id);

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
                rows="4"
                wire:model='description'
                style="width: 100%;"
              ></textarea>
            </div>
            @error('description')
                <span class="danger" style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-12 col-12">
            <div class="form-group" align="center">
                <label for="email-id-column">Preview of current document</label><br>
                <iframe src="{{url('/download/'.$this->informationDocument->url)}}" frameborder="0" style="width: 80%; height:400px;" ></iframe>
            </div>
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
