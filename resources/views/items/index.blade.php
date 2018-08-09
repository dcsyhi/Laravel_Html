@extends('layouts.template')

@section('title', 'Index')

@section('content')
   <p>ここが本文のコンテンツです。</p>
   <p>必要なだけ記述できます。</p>

   @component('components.message')
       @slot('msg_title')
	   CAUTION!
	   @endslot

	   @slot('msg_content')
	   これはメッセージの表示です。
	   @endslot
	@endcomponent

@endsection

