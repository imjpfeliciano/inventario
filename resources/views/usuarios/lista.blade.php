@extends('app')

@section('content')
  @if(count($usuarios) > 0)
    <ul class="collection">
    @foreach($usuarios as $usuario)
    
        <li class="collection-item avatar">
        <img src="" alt="" class="circle">
        <span class="title">{{$usuario->name}}</span>
        <p>{{$usuario->email}}<br>
          {{$usuario->type > 0 ? 'Admin': 'Cliente'}}
        </p>
        <div class="secondary-content">
          <div class="row">
            <a href="#!" ><i class="mdi-editor-mode-edit"></i></a>
          </div>
          <div class="row">
            <a href="#!" ><i class="mdi-action-delete"></i></a>
          </div>
        </div>
        
        
      </li>
    @endforeach
    </ul>
  @endif
@endsection