@extends('templates.form')

@section('title')Заявки@endsection


@section('fill')
<div class="main">
  @include('templates.thanks')
  @foreach($data as $partis)
    <div class="alert alert-info">
      <p>{{ $partis->name }} {{ $partis->surname }}</p>
      <p>{{ $partis->email }}</p>
      <p>{{ $partis->number }}</p>
      <p>{{ $partis->type }}</p>
      <p>{{ $partis->pay }}</p>
      <a href="{{ route('deleter', $partis->id) }}"><button class="btn btn-danger">Удалить</button></a>
    </div>
  @endforeach
</div>
@endsection
