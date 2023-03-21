@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action=" {{ route('admin.projects.index', $projects) }} " method="GET">
                    <button>
                        GO TO PROJECTS
                    </button>
                </form>
            </div>
            <div class="card">
                <a href="" class="btn btn-success mx-2">
                    Aggiungi nuovo prodotto
                </a>
            </div>
        </div>
    </div>
</div>
@endsection