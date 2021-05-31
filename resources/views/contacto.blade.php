@extends('parent')

@section('content')
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class='content contact-content'>
    @foreach($info as $obj)
        <div class='{{$obj["Nombre"]}}-bg' style= 'background:url("/images/contactanos/{{$obj["Foto"]}}")no-repeat; background-size: 250px 250px '><a class ='contact_name'>{{$obj["Nombre"]}}</a></div>
    @endforeach
    </div>
    <div class='modal-bg'>
        <div class='modal'>

        </div>
    </div>
@endsection



