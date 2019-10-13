@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="form-group row mb-2 mt-2 ml-2">
                    <div class="col-md-6">
                        <a href="{{ route('pessoas.create') }}" class="btn btn-primary">
                            Novo
                        </a>
                    </div>
                </div>
                <div class="card-header">{{ $titulo }}</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($pessoas as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nome }}</td>
                                <td>{{ $p->idade }}</td>
                                <td>
                                    <a href="{{ route('pessoas.edit', $p->id) }}" class="btn btn-sm btn-info">Editar</a>

                                    <form method="POST" action="{{ route('pessoas.destroy', $p->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                    </form>
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


@endsection
