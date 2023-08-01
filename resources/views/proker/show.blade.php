@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $proker->namaProker }}</h2>
        <p>{{ $proker->descProker }}</p>
        <!-- Tampilkan informasi proker lainnya sesuai kebutuhan -->
    </div>
@endsection
