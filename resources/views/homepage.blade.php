@extends('master')
@section('title','NoteBook++')

@section('content')
    <x-hero title="Welcome @ Notebook++"/>

    <section class="container featured">
        <h3>Our Value</h3>
        <h1>How we can helps yours</h1>    
        <div class="featured-block">
            <div class="featured-card">
                <div class="featured-logo">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div class="featured-heading">
                    <h3>Noteboko</h3>
                </div>
                <p class="featued-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque quas perferendis unde sunt, quasi magnam.</p>
            </div>

            <div class="featured-card">
                <div class="featured-logo">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h3 class="featured-heading">Notebook</h3>
                <p class="featued-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque quas perferendis unde sunt, quasi magnam.</p>
            </div>

            <div class="featured-card">
                <div class="featured-logo">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div class="featured-heading">
                    <h3>Noteboko</h3>
                </div>
                <p class="featued-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque quas perferendis unde sunt, quasi magnam.</p>
            </div>
        </div>
    </section>

    <section class="container about-us">
        <div class="about-sliders">
            <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="{{asset('images/bg1.jpg')}}" style="width:100%">
                  <div class="text">Caption Text</div>
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="{{asset('images/bg2.jpg')}}" style="width:100%">
                  <div class="text">Caption Two</div>
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="{{asset('images/bg3.jpg')}}" style="width:100%">
                  <div class="text">Caption Three</div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
        </div>
        <div class="about-content">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque tenetur sed in. Assumenda temporibus tempore cumque exercitationem similique amet enim sint dicta. Amet ducimus quo commodi repellendus ab necessitatibus porro magnam perspiciatis autem reprehenderit?</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, sint alias cum distinctio vel, voluptatem suscipit nobis omnis quos quaerat, tenetur harum? Dignissimos harum eaque omnis!</p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque quos sed nobis mollitia harum nihil eaque consequuntur maiores aliquam, atque quasi ad fugiat optio placeat aliquid quis, voluptatibus ratione facere?</p>
        </div>
    </section>
@endsection

    