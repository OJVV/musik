<div>
   
    <section style="padding-top: 170px" id="news-section" class="relative z-10 pt-32 pb-20 mb-5 bg-gray-100 dark:bg-gray-900">


        <div class="max-w-6xl mx-auto px-4">
          <!-- Título -->
          <div class="text-center mb-12 relative z-20">
            <h2 class="text-4xl font-bold text-gray-800 dark:text-white">Últimas Noticias & Eventos</h2>
            <p class="mt-4 text-gray-600 dark:text-gray-300 max-w-xl mx-auto">
              Cursos, talleres y novedades de nuestra comunidad creativa.
            </p>
            <div class="mt-2 w-20 h-1 bg-indigo-600 mx-auto rounded"></div>
          </div>
      
          <!-- Grid de noticias -->
          <div class="news-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Noticia 1 -->
            @if($events->isNotEmpty())
            @foreach ($events as $event )
            <div class="news-item">
                <div class="news-image-container">

                    @if($event->imagen != '')
                    <img src="{{asset('storage/' . $event->imagen)}}" alt="Evento" class="news-image" />
                    @endif
              
                  <div class="news-overlay">
                    <span><i class="fa fa-eye"></i> Ver más</span>
                  </div>
                </div>
                <h3>{{$event->titulo}}</h3>
                <p>{{$event->descripcion}}</p>
                <div class="news-meta">
                  <span><i class="fa fa-calendar"></i> {{$event->fecha}}</span>
                  <span><i class="fa fa-folder"></i> {{$event->categoria}}</span>
                </div>
              </div>
            @endforeach
           

            @endif
          <!-- Botón FUERA del grid -->
          
        </div>
        <div class="text-center mt-12">
            <a href="#" 
               class="relative inline-flex items-center justify-center gap-2 px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:focus:ring-indigo-500">
              <i class="fa fa-calendar-check text-white text-lg"></i>
              <span>Ver Todos los Eventos</span>
            </a>
          </div>
    </section>
</div>
