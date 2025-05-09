<div>
    <section id="portfolio" class="py-20 bg-gray-100 dark:bg-gray-900">
        <h2>Portfolio</h2>
        <div class="portfolio-container">
            @if($portfolios->isNotEmpty())
                @foreach ($portfolios as $portfolio)
                    <div class="portfolio-item">
                        <div class="single_content_item">
                            @if($portfolio->file != '')
                                @php
                                    $fileExtension = pathinfo($portfolio->file, PATHINFO_EXTENSION);
                                @endphp

                                @if(in_array(strtolower($fileExtension), ['jpg', 'jpeg', 'png', 'webp', 'gif']))
                                    <!-- Si es imagen, mostramos la imagen con Lightbox -->
                                    <a href="{{ asset('storage/' . $portfolio->file) }}" data-lightbox="portfolio" data-title="{{ $portfolio->title }}">
                                        <img src="{{ asset('storage/' . $portfolio->file) }}" alt="Portfolio" class="portfolio-image">
                                    </a>
                                @elseif(in_array(strtolower($fileExtension), ['mp4', 'mov', 'avi', 'wmv', 'webm']))
                                    <!-- Si es video, mostramos el reproductor con Lightbox -->
                                    <a href="{{ asset('storage/' . $portfolio->file) }}" data-lightbox="portfolio" data-title="{{ $portfolio->title }}">
                                        <div class="video-container">
                                            <video class="portfolio-video" controls>
                                                <source src="{{ asset('storage/' . $portfolio->file) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </a>
                                @endif
                            @endif
                        </div>
                        <h3 class="portfolio-title">{{$portfolio->title}}</h3>
                        <p class="portfolio-description">{{$portfolio->description}}</p>
                    </div> 
                @endforeach
            @endif
        </div>
    </section>
</div>
