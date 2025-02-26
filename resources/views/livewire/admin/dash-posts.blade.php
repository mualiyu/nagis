<?php

use function Livewire\Volt\{computed};
use App\Models\Post;

$posts = computed(function () {
    return Post::offset(0)->orderBy('created_at', 'DESC')->limit(6)->get();
});

?>

<div>
    <div class="card">
        <div class="card-header">
          <h4>Latest Posts</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-lg">
              <thead>
                <tr>
                  <th>Author</th>
                  <th>Title</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($this->posts as $p)

                    <tr>
                      <td class="col-3">
                        <div class="align-items-center">
                           <p class="font-bold mb-0">{{$p->user->name}}</p>
                        </div>
                      </td>
                      <td class="col-auto">
                        <a href="{{url('/ng-admin/posts/'. $p->id)}}"> <p class="font-bold mb-1">
                          {{$p->title}}:
                        </p></a>
                        <p class="mb-0">
                            {{substr($p->content, 0, 100)}}.....
                        </p>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>
