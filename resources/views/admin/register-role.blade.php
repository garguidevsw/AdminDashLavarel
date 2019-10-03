@extends('layouts.master')

@section('title')
    Dashboard | GARGUIIOT
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Roles de Usuarios</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            ID
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Rol
                        </th>
                        <th>
                            Email
                        </th>
                        <th class="text-right">
                            Acciones
                        </th>
                        </thead>
                        <tbody>

                            @foreach ($usuarios as $key => $usuario)
                                <tr>
                                    <td>
                                    {{ $key+1 }}
                                    </td>
                                    <td>
                                    {{ $usuario->name }}
                                    </td>
                                    <td>
                                    {{ $usuario->user_type }}
                                    </td>
                                    <td>
                                    {{ $usuario->email }}
                                    </td>
                                    <td class="text-right">
                                            <div class="btn-group" role="group">
                                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarUsuarioModal"><i class="now-ui-icons design-2_ruler-pencil"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="now-ui-icons design_scissors"></i></a>
                                            </div>
                                    </td>
                                </tr>
                            @endforeach
                        
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="editarUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editarUsuarioModalLabel">Editar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $usuarios }}">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection