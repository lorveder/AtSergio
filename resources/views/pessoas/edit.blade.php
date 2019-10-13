@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $titulo }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pessoas.update', $pessoa->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="nome" class="col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ $pessoa->nome }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="idade" class="col-md-2 col-form-label text-md-right">{{ __('Idade') }}</label>
                                <div class="col-md-6">
                                    <input id="idade" type="text" class="form-control" name="idade" value="{{ $pessoa->idade }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
