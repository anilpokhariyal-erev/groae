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

                    <a href="/my_booking_requests"><button type="button" class="btn btn-primary mb-2 custom-btn">Click Here</button></a>
                @endif
            </div>
        </div>
    </section>

    <style>
        .custom-btn {
            padding: 12px 25px;
            font-size: 18px;
            background-color: #007bff;
            color: white;
            border-radius: 50px;
            border: 2px solid #007bff;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .custom-btn:hover {
            background-color: #0056b3;
            border-color: #004085;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
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
