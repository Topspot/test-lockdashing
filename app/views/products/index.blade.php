@extends('_layouts.default')
@section('content')
@if(count($products))
    <ul>
    @foreach($products as $product)
        <li>
            {{{ $product->title }}}

        </li>
    @endforeach
    </ul>
@endif
@stop