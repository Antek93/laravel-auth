@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-12 d-flex">
                @foreach ($projects as $project)
                    <div class="card mx-1 px-3">
                        {{ $project->name }}
                    </div>
                @endforeach
                <div>
                    <a href="" class="btn btn-primary">
                        Vedi Dettagli
                    </a>
                </div>
                <div>
                    <a href="" class="btn btn-warning mx-2">
                        Modifica
                    </a>
                </div>
                <div>
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Elimina
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
