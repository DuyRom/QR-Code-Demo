@extends('layouts.app')

@section('content')
    <h1>Chi tiết vật tư: {{ $item->name }}</h1>
    <p>Mã: {{ $item->code }}</p>
    <p>Tồn kho: {{ $item->stock }}</p>
    <a href="{{ route('items.qrcode', $item->code) }}">Tạo mã QR</a>
@endsection
