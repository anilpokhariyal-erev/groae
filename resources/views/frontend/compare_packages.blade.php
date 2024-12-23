<x-website-layout>
    <style>
        .compareTable {
            width: 100%;
            border-collapse: collapse; /* Removes borders between table cells */
        }

        .compareTable th, .compareTable td {
            padding: 12px; /* Add padding for better spacing */
            text-align: left; /* Align text to the left */
        }

        .compareTable th {
            background-color: #304a6f; /* Optional: Add a background color for headers */
            color: #fff;
        }

        .freezone_name {
            text-align: center;
            padding: 5px;
        }

        /* Optional styling for other classes */
        .blackTxt {
            color: #000;
        }

        .book_consultation {
            color: #fff;
            font-weight: 700;
            font-size: 18px;
        }
    </style>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/compare.js') }}" crossorigin="anonymous"></script>
    @endsection
    <section class="center-section">
        <div class="container">
            <div class="compareContainer">
                <div class="compareInnrWrapper">
                    <table class="compareTable">
                        <thead>
                            <tr>
                                <th>Features</th>
                                @foreach ($packages as $package)
                                    <th>{{ $package->title }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @if($attributes->isNotEmpty())
                                @foreach($attributes as $attribute)
                                    <tr>
                                        <td class="subTxt">{{ $attribute->label }}</td> <!-- Attribute name -->
                                        @foreach ($packages as $package)
                                            @php
                                                // Find the matching package line for this attribute
                                                $line = $package->packageLines->where('status', 1)->firstWhere('attribute_id', $attribute->id);
                                            @endphp
                                            <td class="userList {{ $line ? 'blackTxt' : '' }}">
                                                <!-- Display the attribute option value or 'None' if not available -->
                                                {{ $line ? $line->attributeOption->value : '-' }}
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="{{ count($packages) + 1 }}" class="subTxt">No features available</td>
                                </tr>
                            @endif
                            <tr>
                                <td></td>
                            @foreach ($packages as $package)
                                <td>
                                <div class="columnInnr1">
                                        <img class="itemLogo"
                                            src="{{ $package->freezone->logo ? Storage::url($package->freezone->logo) : asset('images/placeholder.png') }}"
                                            alt="">
                                </div>
                                <div class="freezone_name">{{ $package->freezone->name }}</div>
                                <p class="rupeesTxt" >Starting from <br>{{ $package->currency }}  {{ $package->price }}* <br>
                                    <a style="color: #fff" href="{{ url('calculate-licensecosts?package_id=' . encrypt($package->id)) }}" class="viewInnrTxt">Customize
                                        <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                    </a></p>
                                </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
            <a class="signupBtn book_consultation" href="{{ route('contact-us.index') }}">Book a Consultation</a>
        </div>
    </section>
</x-website-layout>
