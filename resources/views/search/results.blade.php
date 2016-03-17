@extends('partials.master')

@section('content')
    <h3>You searched for "{{ Request::input('query') }}"</h3>

    @if (! $users->count())
        <h4>Sorry!! No user with that name exists</h4>
    @else
        <div class="row">
            <div class="col-lg-12">
                @foreach ($users as $user)
                    @include('partials.userblock')
                @endforeach
            </div>
        </div>
    @endif
@stop
