@extends('layouts.app')

@section('title', 'Mã QR cho vật tư')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Mã QR cho vật tư: {{ $item->name }}</h1>
            <div>{!! $qrCode !!}</div>
            <button class="btn btn-secondary mt-4" onclick="window.print()">In mã QR</button>
            <a class="btn btn-primary mt-4" href="{{ route('items.show', $item->id) }}">Trở lại</a>
        </div>
    </div>
@endsection
