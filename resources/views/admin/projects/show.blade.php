@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card mx-1 px-3">
                    {{ $projects }}
                </div>
                <div>
                    <a href="{{ 'projects.index' }}">
                        <button class="btn btn-danger">
                            Return
                        </button>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
@endsection
