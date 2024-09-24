<div class="searchFields">
    <form class="searchingForm" id="searchForm">
        @foreach ($attributes as $attribute)
            <div class="formContainer">
                <select class="ai_filter_options" name="attribute_{{ $attribute->id }}">
                    <option value="" selected disabled>Choose {{ $attribute->name }}</option>
                    @foreach ($attribute->options as $option)
                        <option value="{{ $option->id }}">{{ $option->value }}</option>
                    @endforeach
                </select>
            </div>
        @endforeach
        <div class="formContainer" id="searchBtn">
            <a class="searchAnchor"> <input type="button" class="searchInput" value=""><img
                    class="seatcIcon" src="{{ asset('images/seatc.png') }}" alt=""></a>
        </div>
        <div class="formContainer" id="clearSearchBtn">
            <img class="cursor" src="{{ asset('images/cross-icon.png') }}" alt="">
        </div>
    </form>
</div>