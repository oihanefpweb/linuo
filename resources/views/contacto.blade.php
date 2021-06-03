@extends('parent')

@section('content')
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class='content contact-content'>

    @foreach($info as $obj)
        <div class='{{$obj["nombre"]}}-bg contacto' id='{{$obj["id"]}}' style= 'background:url("{{$obj["foto_perfil"]}}")no-repeat; background-size: 400px 400px '><a class ='contact_name'>{{$obj["nombre"]}}</a></div>
    @endforeach
    </div>
    <div class='modal-bg ' >
        <div class='modal' >
            <div class='modal-header'>
                <div class='modal-close'><a>X</a></div>
                <div class='modal-dir'><a class='modal-name'></a>@ubuntu: ~</div>
            </div>
            <div class='modal-body'>
                
            </div>
    </div>
@endsection



