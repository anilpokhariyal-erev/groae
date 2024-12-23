@section('css-imports')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
        /* Custom styles for Select2 to override defaults */
        .searchingForm .ai_filter_options.select2-hidden-accessible {
            border-radius: 15px !important;
            padding: 0 16px !important;
            color: #304a6f !important;
            outline: none !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 18px !important;
            font-weight: 500 !important;
            position: relative !important;
            background-image: url('../../images/caret-down.png') !important;
            background-repeat: no-repeat !important;
            background-position: right 0.7rem center !important;
            background-size: 0.65rem auto !important;
        }

        .select2-container--default .select2-selection--single {
            border-radius: 15px !important;
            width: 263px !important;
            height: 55px !important;
            padding: 0 16px !important;
            border: 1px solid #ccc !important; /* Optional: Add border if needed */
            color: #304a6f !important;
            outline: none !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 18px !important;
            font-weight: 500 !important;
        }

        .select2-selection__rendered {
            line-height: 55px !important; /* Vertically center the text */
            color: #304a6f !important;
            outline: none !important;
            font-family: 'Poppins', sans-serif !important;
            font-size: 18px !important;
            font-weight: 500 !important;
        }

        .select2-selection__arrow {
            display: none !important; /* Hide the default arrow */
        }

        /* Ensure clear button is visible */
        .select2-selection__clear {
            display: inline-block !important;
        }
        span.select2-selection__placeholder{
            color: #304a6f !important;
        }

        @media (max-width: 1366px) {
            #searchBtn {
                margin-top: 25px;
            }

            #clearSearchBtn {
                margin-top: 25px;
            }
        }

    </style>
@endsection

<div class="searchFields">
    <form class="searchingForm" id="searchForm" method="POST" action="explore-freezone">
        @csrf
        @foreach ($attributes as $attribute)
            <div class="formContainer">
                <select class="ai_filter_options" name="attribute_value[{{$attribute->id }}]"
                        data-placeholder="Choose {{ $attribute->label }}" >
                    <option value="" selected disabled>Choose {{ $attribute->label }}</option>
                    @if($attribute->allow_any)
                        <option value="any" {{ isset($selectedAttributes[$attribute->id]) && $selectedAttributes[$attribute->id] == 'any' ? 'selected' : '' }}>Any</option>
                    @endif
                    @foreach ($attribute->options as $option)
                        <option value="{{ $option->id }}"
                                {{ isset($selectedAttributes[$attribute->id]) && $selectedAttributes[$attribute->id] == $option->id ? 'selected' : '' }}>
                            {{ $option->value }}</option>
                    @endforeach
                </select>
            </div>
        @endforeach
        <div class="formContainer" id="searchBtn">
            <a class="searchAnchor"> <input type="button" class="searchInput" value=""><img class="seatcIcon" src="{{ asset('images/seatc.png') }}" alt=""></a>
        </div>
        <div class="formContainer" id="clearSearchBtn">
            <img class="cursor" src="{{ asset('images/cross-icon.png') }}" alt="">
        </div>
    </form>
</div>

@section('ai-js-imports')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Select2 with dynamic placeholder option for each select element
            $('.ai_filter_options').each(function() {
                var placeholderText = $(this).data('placeholder'); // Get dynamic placeholder text
                $(this).select2({
                    allowClear: true,
                    placeholder: placeholderText // Apply dynamic placeholder
                });
            });

            // Custom clear search button functionality
            $('#clearSearchBtn img').on('click', function() {
                // Reset all Select2 fields
                $('.ai_filter_options').val(null).trigger('change'); // Clear the value and trigger change
            });
        });
    </script>
@endsection
