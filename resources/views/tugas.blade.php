@extends('layouts.app')

@section('content')
    @livewire('materi', ['data' => $datatugas])

    @livewire('essay', ['data' => $datatugas])
@endsection
