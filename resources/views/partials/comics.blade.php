<section class="comics">
    <div class="container">
        <div class="current">
            <button>
                <a href="">CURRENT SERIES</a>
            </button>
        </div>
        <section class="section-card">
            <div class="row">
                @foreach ($comics as $single_comics)
                    <div class="col">
                        <div class="card">
                            <img src="{{$single_comics['thumb']}}" alt="">
                            <h3>{{ $single_comics['series']}}</h3>
                        </div>
                    </div> 
                @endforeach
            </div>
        </section>
        <div class="loadMore">
            <button>
                <a href="">LOAD MORE</a>
            </button>
        </div>
    </div>
</section>