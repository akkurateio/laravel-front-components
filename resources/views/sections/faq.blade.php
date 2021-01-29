<section class="section">
    <div class="container">
        <h2 class="text-5xl text-center font-semibold akk-mb-16">{{$title}}</h2>
        <div class="row">
            @if(!empty($faqs))
                @foreach($faqs as $faq)
                    <div class="col-md-6 akk-mb-8 akk-px-8">
                        <h3 class="text-xl">{{ $faq->title }}</h3>
                        <p class="text-muted">{{ $faq->content }}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
