<?php
use function Livewire\Volt\{state, computed, placeholder};
use App\Models\Gallery;

placeholder('<div>Loading...</div>');

$galleries = computed(function () {
    return Gallery::orderBy('created_at', 'DESC')->get();
});

$i = 1;

$deleteG = function (Gallery $gallery){
    Storage::delete($gallery->image);
    $gallery->delete();
};


?>

<div>
    <table class="table table-hover table-lg">
        <thead>
          <tr>
            <th>S/N</th>
            <th>Title</th>
            <th>Picture</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @if (count($this->galleries)>0)
        @foreach ($this->galleries as $g)
          <tr>
            <td>{{$g->id}}</td>
            <td class="col-3">
              <div class="align-items-center">
                <p class="font-bold mb-0">{{$g->title}}</p>
              </div>
            </td>
            <td class="col-auto">
              <p class="font-bold mb-1">
                <img style="width: auto; height:60px;" src="{{url('/storage/'.$g->image)}}" alt="">
                {{-- {{$p->title}}: --}}
              </p>
            </td>
            <td>
              <a href="{{url('/ng-admin/galleries/'.$g->id)}}" class="btn btn-success"
                >View/Edit</a
              >
              <button onclick="confirm('Are you sure you want to delete this👇🏽?') || event.stopImmediatePropagation()" wire:click='deleteG({{$g->id}})' href="#" class="btn btn-warning"
                ><i class="bi bi-trash-fill"></i
              ></button>
            </td>
          </tr>
          @endforeach
          @else
            <tr><td colspan="4" align="center"> No data found</td></tr>
        @endif
        </tbody>
      </table>
</div>
