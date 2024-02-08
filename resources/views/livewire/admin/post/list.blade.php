<?php
use function Livewire\Volt\{state, computed, placeholder};
use App\Models\Post;

placeholder('<div>Loading...</div>');

$posts = computed(function () {
    return Post::all();
});

$deletePost = function (Post $post){
    Storage::delete($post->image);
    $post->delete();
};


?>

<div>
    <table class="table table-hover table-lg">
        <thead>
          <tr>
            <th>S/N</th>
            <th>Author</th>
            <th>Title</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @if (count($this->posts)>0)
        @foreach ($this->posts as $p)
          <tr>
            <td>1</td>
            <td class="col-3">
              <div class="align-items-center">
                <p class="font-bold mb-0">{{$p->user->name}}</p>
              </div>
            </td>
            <td class="col-auto">
              <p class="font-bold mb-1">
                {{$p->title}}:
              </p>
              <p class="mb-0">
                {{substr($p->content, 0, 100)}}.....
              </p>
            </td>
            <td>
              <a href="{{url('/admin/posts/'.$p->id)}}" class="btn btn-success"
                >View/Edit</a
              >
              <button onclick="confirm('Are you sure you want to delete this👇🏽?') || event.stopImmediatePropagation()" wire:click='deletePost({{$p->id}})' href="#" class="btn btn-warning"
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
