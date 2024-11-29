<x-website-layout>

    <section class="center-section">
        <div class="blogDetailContainer">
            <div class="container" style="text-align: center">

                {{-- Success message box --}}
                @if($successMessage)
                    <div class="alert alert-success" role="alert"
                         style="background-color: #d4edda; color: #155724; padding: 20px; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-size: 18px;">
                        <strong style="font-size: 20px; font-weight: bold;">Success!</strong>
                        <p style="margin-top: 10px; font-size: 16px;">{{ $successMessage }}</p>
                    </div>

                    <div class="alert alert-success" role="alert" style="background-color: #f8f9fa; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 30px; font-size: 16px;">
                        <p style="margin-bottom: 0;">Click below to check all Booking Requests.</p>
                    </div>

                    <a href="/my_booking_requests"><button type="button" class="btn btn-primary mb-2 custom-btn">Booking Requests</button></a>
                @endif
            </div>
        </div>
    </section>

    <style>
        .custom-btn {
            background: #304a6f;
            color: #fff;
            padding: 14px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-family: Poppins;
            font-size: 18px;
            font-weight: 500;
        }
        .alert {
            border-radius: 8px;
        }

        /* Add responsiveness */
        @media (max-width: 768px) {
            .custom-btn {
                font-size: 16px;
                padding: 10px 20px;
            }
        }
    </style>
</x-website-layout>
