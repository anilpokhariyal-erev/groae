<x-website-layout>
    <section class="center-section">
        <div class="blogDetailContainer">
            <div class="container">

                {{-- Success message box --}}
                @if($successMessage)
                    <div class="alert alert-success" role="alert" style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                        <strong>Success!</strong> {{ $successMessage }}
                    </div>
                @endif
            </div>
        </div>
    </section>
</x-website-layout>
