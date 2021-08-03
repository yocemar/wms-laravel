@extends('layouts.app')

@section('content')
  <div class="container-fluid">
        <div class="animated fadeIn">
             <div class="row">
                 <h1>{{auth()->user()->rol}}</h1>

            </div>
        </div>
    </div>
</div>
@endsection
