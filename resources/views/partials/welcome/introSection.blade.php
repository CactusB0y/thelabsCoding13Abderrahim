<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach ($logos as $logo)
                <img src="{{asset('img/'.$logo->src)}}" alt="">   
            @endforeach
            <p>Get your freebie template now!</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        <div class="item  hero-item" data-bg="{{asset('img/01.jpg')}}"></div>
        <div class="item  hero-item" data-bg="{{asset('img/02.jpg')}}"></div>
    </div>
</div>
<!-- Intro Section -->