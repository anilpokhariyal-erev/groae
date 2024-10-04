<x-website-layout>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/compare.js') }}" crossorigin="anonymous"></script>
    @endsection
    <section>
        <div class="center-section"
            style="display: flex; justify-content: center; align-items: center; animation: blinker 1.5s linear infinite;">
            <p class="tHeadingTxt">
                Exciting Updates Coming Soon!
            </p>
        </div>
    </section>
    <style>
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>
</x-website-layout>
