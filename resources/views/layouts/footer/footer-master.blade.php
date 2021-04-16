<footer class="bg-gray-800">
    <div class="flex flex-col md:flex-row">
        <div class="logo-footer">
            <img src="img/logos/logo-footer.webp" alt="logo crossfit goals factory">
        </div>
        <div class="horario">
            <p class="py-2 mx-3 font-bold text-white uppercase">Horario</p>
            <div class="apertura">
                <ul>
                    <li class="py-2 mx-3 text-white border-b-2 border-indigo-600">Lunes <span class="">07:00-22:00</span></li>
                    <li class="py-2 mx-3 text-white border-b-2 border-indigo-600">Martes <span class="">07:00-22:00</span></li>
                    <li class="py-2 mx-3 text-white border-b-2 border-indigo-600">Miercoles <span class="">07:00-22:00</span></li>
                    <li class="py-2 mx-3 text-white border-b-2 border-indigo-600">Jueves <span class="">07:00-22:00</span></li>
                    <li class="py-2 mx-3 text-white border-b-2 border-indigo-600">Viernes <span class="">07:00-22:00</span></li>
                    <li class="py-2 mx-3 text-white border-b-2 border-indigo-600">Sábado <span class="">08:30-13:00</span></li>
                    <li class="py-2 mx-3 text-white border-b-2 border-indigo-600">Domingo <span class="">Cerrado</span></li>
                </ul>
            </div>
        </div>
        <div class="">
            <p class="py-2 mx-3 font-bold text-white uppercase">Dirección</p>
            <p class="py-2 mx-3 font-bold text-white uppercase">Nos encontramos en: Calle Marmolistas, nº 4, código postal 04740 Roquetas de Mar, Almería</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12781.712740749068!2d-2.6055152!3d36.7842829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76465c1092c784e4!2sCrossfit%20Goals%20Factory!5e0!3m2!1ses!2ses!4v1617658465187!5m2!1ses!2ses" width="100%" height="420px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
    </div>


     <!-- Scripts -->
     <script src="{{ mix('js/app.js') }}" defer></script>
     @stack('modals')
     @livewireScripts
</footer>
