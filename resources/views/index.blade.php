@extends('parent')

@section('content')
<div class="home-content">
    <div class="section section1" data-background="#3498db">
        <div class="slogan-content">
            <a class="slogan"> Linked in<br>Unai & Oihane<span>&#160;</span></a>
        </div>
    </div>
    <div class="section section2" data-background="#153144">
        <div class="web-developers-content">
            <a class="web-developers"> Web developers</a>
        </div>
        <div class="website-making-video"data-tilt-reset='false' data-tilt>
            <video width="100%" height="100%" autoplay class='project__image'>
                <source src="/videos/website-making-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="section section3" data-background="#808080">
            <div class="actions">
                <div class="floating design"><a data-floating='1'>Design</a> </div>
                <div class="floating programming"><a data-floating='2'>Programing</a> </div>
                <div class="floating testing"><a data-floating='3'>Testing</a></div><br>
                <div class="floating coding"><a data-floating='4'>Coding</a></div>
                <div class="floating functionality"><a data-floating='5'>Functionality</a></div>
            </div>
        
    </div>
    <div class="section section4" data-background="#06061A">
        @include('burbujas')
        <div class="contact-us-content">
            <a class="contact-us"> Contact us</a>
        </div>
    </div>
   
</div>
<script src="{{ asset('js/index.js') }}"></script>

@endsection