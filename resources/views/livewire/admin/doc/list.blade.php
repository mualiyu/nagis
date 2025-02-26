<?php

use function Livewire\Volt\{state, computed, placeholder};
use App\Models\Information;

placeholder('<div>Loading...</div>');

$infs = computed(function () {
    return Information::all();
});

$deleteIf = function (Information $information){
    if (count($information->documents)>0) {
        foreach ($information->documents as $d) {
            Storage::delete($d->url);
            $d->delete();
        }
    }
    $information->delete();
};

?>

<div>
    <table class="table table-striped" id="table1">
        <thead>
          <tr>
            <th>Name</th>
            <th>Number of Doc's</th>
            <th>Description</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
            @if (count($this->infs)>0)
            @foreach ($this->infs as $if)

            <tr>
              <td>{{$if->name}}</td>
              <td>{{count($if->documents)}}</td>
              <td>{{$if->description}}</td>
              <td>
                <a href="{{url('/ng-admin/informations/'. $if->id)}}" class="btn btn-success"
                  >View</a
                >
                <a href="{{url('/ng-admin/informations/'. $if->id. '/update')}}" class="btn btn-success"
                    >Edit</a
                  >
                <button onclick="confirm('Are you sure you want to delete this👇🏽?') || event.stopImmediatePropagation()" wire:click='deleteIf({{$if->id}})' href="#" class="btn btn-warning"
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
