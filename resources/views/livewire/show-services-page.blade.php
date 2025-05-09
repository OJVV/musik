<div>
    <section id="service" class="service">
        <div class="container">
            <div class="row">
                <a href="#lessons" class="service_border_raund text-center">
                    <img src="{{ asset('assets/images/downicon.png') }}" alt="" />
                </a>
                <div class="main_service_area sections text-center">
                    <div class="head_title text-center">
                        <h2>SERVICES</h2>
                        <div class="separator"></div>
                        <p>Soy un apasionado de la música con años de experiencia enseñando diversos instrumentos. Ofrezco clases personalizadas de guitarra acústica y eléctrica, piano, ukelele, bajo, batería, cajón, congas y canto. Mi objetivo es ayudarte a descubrir tu talento musical y disfrutar cada paso del aprendizaje.</p>
                    </div>

                    @if($services->isNotEmpty())
                        <div class="services-grid">
                            @foreach ($services as $service)
                                <div class="service-card">
                                    <div class="single_service">
                                        <div class="single_service_icon">
                                            <i class="{{ $service->icon }}"></i>
                                        </div>
                                        <h3>{{ $service->title }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
