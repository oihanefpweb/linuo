<section class="bubbles sectional text-left text-white orange-yellow fixed_background bg_transparent">
    <div class="container">
        <div class="dentro"></div>
        <div class="bubble-wrap">
        @for($i = 0; $i < 50 ; $i++)
            <div class="bubble"></div>
        @endfor
        </div>
    </div>
    <script src="{{ asset('js/burbujas.js') }}"></script>
</section>