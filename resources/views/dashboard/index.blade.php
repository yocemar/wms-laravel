@extends('layouts.app')

@section('content')
  <div class="container-fluid">
        <div class="animated fadeIn">
             <div class="row">
                <h1>dashboard</h1>
                 <h1>{{auth()->user()}}</h1>

            </div>
        </div>
    </div>
</div>
@endsection
