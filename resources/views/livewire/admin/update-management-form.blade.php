<?php
use App\Models\Management;
use function Livewire\Volt\{state, rules, usesFileUploads, mount, computed};

usesFileUploads();

state('management');
// dd($this->management);

state([
    'name'=> '',
    'gender'=> '',
    'position'=> '',
    'rank'=> '',
    'description'=> '',
    'image'=> null,

    "success"=>'',
]);

mount(function ($management) {
    // $this->count = count($users);
    $this->name = $this->management->name;
    $this->gender = $this->management->gender;
    $this->position = $this->management->position;
    $this->rank = $this->management->rank;
    $this->description = $this->management->description;
    $this->image = null;
});

rules([
    'name'=> 'required|min:6',
    'gender'=> 'required',
    'position'=> 'required',
    'rank'=> 'required',
    'description'=> 'nullable',
    'image'=> 'nullable|max:2024',
]);

$submit = function () {
    $this->validate();

    if ($this->image) {
        Storage::delete($this->management->image);
    }

    Management::where("id", '=', $this->management->id)->update([
            "name"=>$this->name,
            "gender"=>$this->gender,
            "position"=>$this->position,
            "rank"=>$this->rank,
            "description"=>$this->description,
            "image"=>$this->image ? $this->image->store('managements') : $this->management->image,
    ]);

    $this->management->image = Management::where("id", '=', $this->management->id)->get()[0]->image;

    // $this->success = "You have added new staff member to the team";

    session()->flash('message', 'Successfully updated.');

    sleep(3);

    // header('location: /admin/management');

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
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="first-name-column"> Name</label>
              <input
                type="text"
                id="first-name-column"
                class="form-control"
                placeholder="First Name"
                name="name"
                wire:model='name'
              />
            </div>
            @error('name')
                <span class="danger" style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="rank">Gender</label>
              <select
                id="rank"
                class="form-control"
                name="gender"
                wire:model='gender'
              >
              <option disabled selected value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            @error('gender')
                <span class="danger" style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="city-column">Position</label>
              <input
                type="text"
                name="position"
                id="city-column"
                class="form-control"
                placeholder="position"
                wire:model='position'
              />
            </div>
            @error('position')
                <span class="danger" style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-6 col-12">
            <div class="form-group">
              <label for="rank">Rank</label>
              <select
                id="rank"
                class="form-control"
                name="rank"
                wire:model='rank'
              >
              <option disabled selected value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            @error('rank')
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
                <img src="{{url('/storage/'.$this->management->image)}}" alt="" style="height:300px; width:auto;">
            </div>
            <div class="form-group">
              <label for="email-id-column">Upload New Image</label>
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
            </button><br>
            <div wire:loading>
                Processing...
            </div>
          </div>
        </div>
      </form>
</div>

{{-- <script src="{{asset('/admin/assets/extensions/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('/admin/assets/static/js/pages/tinymce.js')}}"></script>
 --}}
