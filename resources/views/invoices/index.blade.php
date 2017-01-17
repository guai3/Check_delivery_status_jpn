@extends('layouts.default')

@section('title', '配達状況確認ツール')

@section('content')
<h1>配達状況確認ツール</h1>
<!-- <ul>
  @foreach ($invoices as $invoice)
  <li><a href="">{{ $invoice->invoice_number }}</a></li>
  @endforeach

</ul> -->

<ul>
  @forelse ($invoices as $invoice)
  <li><a href="">{{ $invoice->invoice_number }}</a></li>
  <li><a href ="/invoices/{{ $invoice->company}}">{{ $invoice->company }}</a></li>
  <li><a href ="{{url('/invoices/', $invoice->id)}}">{{ $invoice->company }}</a></li>
  @empty
  <li>No posts yet </li>
  @endforelse

</ul>
@endsection