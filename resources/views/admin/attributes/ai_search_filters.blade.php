<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-heading">AI Search Filters</h5>
                <button type="button" id="add-dropdown" class="btn btn-secondary mt-2 mb-2">
                    <i class="fa fa-plus"></i> Add More
                </button>
            </div>
            
            <form method="post" action="{{ route('admin.ai_search_filters.store') }}">
                @csrf

                <div id="attribute-dropdowns">
                    @for ($i = 0; $i < $minValue; $i++)
                        <div class="form-group attribute-dropdown">
                            <label for="attribute_{{ $i }}">Filter Attribute : {{$i + 1}}</label>
                            <select name="attributes[]" class="form-control">
                                <option value="">Select an attribute</option>
                                @foreach($attributes as $attribute)
                                    <option value="{{ $attribute->id }}" {{ in_array($attribute->id, $selectedAttributes) && $attribute->id == $selectedAttributes[$i] ? 'selected' : '' }}>
                                        {{ $attribute->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    @endfor

                    {{-- Show additional selected attributes if there are more than minValue --}}
                    @foreach($selectedAttributes as $index => $selectedId)
                        @if($index >= $minValue)
                            <div class="form-group attribute-dropdown">
                                <label for="attribute_{{ $index }}">Filter Attribute : {{$index + 1}}</label>
                                <select name="attributes[]" class="form-control">
                                    <option value="">Select an attribute</option>
                                    @foreach($attributes as $attribute)
                                        <option value="{{ $attribute->id }}" {{ $attribute->id == $selectedId ? 'selected' : '' }}>
                                            {{ $attribute->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div>
                    <button type="submit" class="btn btn-primary mt-2">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const maxValue = {{ $maxValue }};
        let currentCount = {{ count($selectedAttributes) }}; // Use count of selected attributes

        document.getElementById('add-dropdown').addEventListener('click', function() {
            if (currentCount < maxValue) {
                currentCount++;
                const dropdownsDiv = document.getElementById('attribute-dropdowns');

                const newDropdown = document.createElement('div');
                newDropdown.className = 'form-group attribute-dropdown';
                newDropdown.innerHTML = `
                    <label for="attribute_${currentCount}">Filter Attribute : ${currentCount}</label>
                    <select name="attributes[]" class="form-control">
                        <option value="">Select an attribute</option>
                        @foreach($attributes as $attribute)
                            <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                        @endforeach
                    </select>
                `;
                
                dropdownsDiv.appendChild(newDropdown);
            } else {
                alert('Maximum number of attributes reached.');
            }
        });
    </script>
</x-admin-layout>
