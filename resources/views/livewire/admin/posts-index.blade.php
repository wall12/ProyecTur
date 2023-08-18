<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del posts">

    </div>
    

@if ($posts->count())


    <div class="card-body">
        <table class="table  table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>
                            <td with ="10px">
                                <a  class="btn btn-success btn-sm"href="{{route('admin.posts.edit', $post)}}">Editar</a>
                            </td>
                            <td with ="10px">
                                <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        Eliminar

                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </tbody> 
        </table>
    </div>
    <div class="car card-footer">
            {{$posts->links()}}
    </div>

    @else
        <div class="card-body">
            <strong> No existe ningun registro...</strong>
        </div>
@endif
</div>
