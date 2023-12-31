<div class="hero">
    <div>
        <p class="blog-details"> @if (!empty($blogDate))
            {{date('Y-m-d', strtotime($blogDate))}} 
        @endif  @if($category != "") &#x2022; @endif {{$category}} </p>
        <h1 class="blog-heading">{{$title}}</h1>
        {{-- Demo Project: Laravel Personal Blog --}}
    </div>
</div>