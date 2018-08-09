@extends('layouts.template')

@section('title', '(=ﾟωﾟ)ﾉ')

@section('content')
   <p>本文</p>
   <p>たくさん書くところ</p>

   @component('components.message')
       @slot('msg_title')
	   囲んでみたよ
	   @endslot

	   @slot('msg_content')
	   (/・ω・)/
	   @endslot
	@endcomponent

@endsection

