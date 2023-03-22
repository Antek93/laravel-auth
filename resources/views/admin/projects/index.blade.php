@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">

            <div class="col-12">
                <h1>
                    Tutti i miei progetti
                </h1>
            </div>
            <div class="row justify-content-center py-4">
                <div class="col-12 d-flex">
                    <a href="{{ route('admin.projects.create') }}">
                        <button class="btn btn-success">
                            Aggiungi un progetto
                        </button>
                    </a>
                </div>
            </div>
            @foreach ($projects as $project)
                <div class="row">
                    <div class="fw-bold ">
                        <hr>
                        <h2>
                            {{ $project->id }}) {{ $project->name }}
                        </h2>
                    </div>
                    <div class="d-flex justy-content-between">
                        <div>
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">
                                Vedi Dettagli
                            </a>
                        </div>
                        <div>
                            <a href="#" class="btn btn-warning mx-2">
                                Modifica
                            </a>
                        </div>
                        <div>
                            {{-- <form action="" method="POST"> --}}
                            {{-- @csrf --}}
                            {{-- @method('DELETE') --}}
                            <button type="submit" class="btn btn-danger">
                                Elimina
                            </button>
                            {{-- </form> --}}
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
