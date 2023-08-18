<div>
  
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="INGRESE EL NOMBRE O CORREO DEL USUARIO">
        </div>

@if ($users->count())
    
        <div class="card-body">
            <table class="table table-strped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>EMAIL</th>
                        <th></th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width="10px">
                                <a class="btn btn-success" href="{{route('admin.users.edit', $user)}}">Editar</a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
            </table>

        </div>

        <div class="card-footer">
            {{$users->links()}}
         </div>
     
             
         @else 
         <div class="card-body">
                <strong>No hay registros con esos datos</strong>
         </div>
             
         
         @endif
    </div>

</div>
