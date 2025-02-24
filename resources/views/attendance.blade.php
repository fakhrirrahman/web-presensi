@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Absensi Harian</h2>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('attendance.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="photo">Ambil Foto:</label>
            <input type="file" name="photo" id="photo" required accept="image/*" capture="camera">
        </div>
        <button type="submit">Submit Absensi</button>
    </form>
</div>
@endsection