@extends('parent')

@section('content')
<div class="home-content">
    <div class="section section1" data-background="#3498db">
        <div class="slogan-content">
            <a class="slogan"> Linked in</br>Unai & Oihane<span>&#160;</span></a>
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
    <div class="section section3" data-background="#15442e">
        <div class="actions">
            <a class="floating coding" data-floating='1'>Coding </a>
            <a class="floating testing" data-floating='2'> Testing</a>
            <a class="floating programming" data-floating='3'>Programing </a>
            <a class="floating design" data-floating='4'> Design</a>
            <a class="floating functionality" data-floating='5'> Functionality</a>
        </div>
    </div>
    <div class="section section3" data-background="#15442e">
        <div class="web-developers-content">
            <a class="web-developers"> Web developers</a>
        </div>

        <!-- 
            <div class="ball-bounce-content">
            <div class="ball-bounce"></div>
            </div> 
        -->
        <div class="contact-us-content">
            <a class="contact-us"> Contáctanos</a>
        </div>

    </div>
   
</div>
@endsection