@extends('app')

@if( Auth::user()->type  == 1)
	@include('admin/menu')
@else
	@include('client/menu')
@endif
