<?php

use function Livewire\Volt\{state, computed, placeholder};
use App\Models\Management;

placeholder('<div>Loading...</div>');

$managements = computed(function () {
    return Management::all();
});

$deleteManager = function (Management $management){
    Storage::delete($management->image);
    $management->delete();
};

?>

<div>
    <table class="table table-striped" id="table1">
        <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Rank</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
            @if (count($this->managements)>0)
            @foreach ($this->managements as $m)
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-xl">
                    <img src="/storage/{{$m->image}}" />
                  </div>
                  <p class="font-bold ms-3 mb-0">{{$m->name}}</p>
                </div>
              </td>
              <td>{{$m->position}}</td>
              <td>{{$m->rank}}</td>
              <td>
                <span class="badge bg-success"><a href="{{url('/admin/managements/'.$m->id)}}">View</a></span>
                <button onclick="confirm('Are you sure you want to delete this👇🏽?') || event.stopImmediatePropagation()" wire:click='deleteManager({{$m->id}})' href="#" class="btn btn-warning"
                    ><i class="bi bi-trash-fill"></i
                  ></button>
              </td>
            </tr>
            @endforeach
            @else
            <tr><td colspan="4" align="center">No data found!!!</td></tr>
            @endif
        </tbody>
      </table>
</div>
