<?php

use function Livewire\Volt\{state, computed, placeholder};
use App\Models\Information;
use App\Models\InformationDocument;

state('information');

placeholder('<div>Loading...</div>');

$downs = computed(function () {
    return InformationDocument::where('info_id', '=', $this->information->id)->get();
});

$deleteD = function (InformationDocument $InformationDocument){
    Storage::delete($InformationDocument->url);
    $InformationDocument->delete();
};

?>

<div>
    <table class="table table-striped" id="table1">
        <thead>
          <tr>
            <th>Name</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
            @if (count($this->downs)>0)
            @foreach ($this->downs as $d)
            <tr>
              <td>{{$d->name}}</td>
              <td>
                <a target="_blank"  href="{{url('/download/'.$d->url)}}" class="btn btn-success">Download</a>
                <a href="{{url('/admin/informations/'.$this->information->id.'/download/'.$d->id)}}" class="btn btn-info">edit</a>
                <button onclick="confirm('Are you sure you want to delete this👇🏽?') || event.stopImmediatePropagation()" wire:click='deleteD({{$d->id}})' href="#" class="btn btn-warning"
                  ><i class="bi bi-trash-fill"></i
                ></button>
              </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="2" align="center">No files found..... <a href="{{url('/admin/informations/'.$this->information->id.'/download/upload')}}">Create one</a></td>
              </tr>
            @endif
        </tbody>
      </table>
</div>
