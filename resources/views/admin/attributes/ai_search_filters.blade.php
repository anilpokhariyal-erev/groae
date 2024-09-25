<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-heading">AI Search Filters</h5>
                <button type="button" id="add-dropdown" class="btn btn-secondary mt-2 mb-2">
                    <i class="fa fa-plus"></i> Add More
                </button>
            </div>

            @if(session('success'))
                <div class="main-card">
                    <div class="card-body">
                        <div class="custom-alert" role="alert">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif

            <form method="post" action="{{ route('admin.ai_search_filters.store') }}" id="ai-search-filters-form">
                @csrf

                <div id="attribute-dropdowns">
                    @for ($i = 0; $i < $minValue; $i++)
                        <div class="form-group attribute-dropdown" id="dropdown-{{$i}}">
                            <label for="attribute_{{ $i }}">Filter Attribute : {{$i + 1}}</label>
                            <select name="attributes[]" class="form-control" required>
                                <option value="">Select an attribute</option>
                                @foreach($attributes as $attribute)
                                    <option value="{{ $attribute->id }}"
                                            {{ in_array($attribute->id, $selectedAttributes) && (isset($selectedAttributes[$i]) && $attribute->id == $selectedAttributes[$i]) ? 'selected' : '' }}>
                                        {{ $attribute->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($i >= $minValue)
                                <button type="button" class="btn btn-warning remove-dropdown mt-2 mb-2">Remove</button>
                            @endif
                        </div>
                    @endfor

                    {{-- Show additional selected attributes if there are more than minValue --}}
                    @foreach($selectedAttributes as $index => $selectedId)
                        @if($index >= $minValue)
                            <div class="form-group attribute-dropdown" id="dropdown-{{$index}}">
                                <label for="attribute_{{ $index }}">Filter Attribute : {{$index + 1}}</label>
                                <select name="attributes[]" class="form-control" required>
                                    <option value="">Select an attribute</option>
                                    @foreach($attributes as $attribute)
                                        <option value="{{ $attribute->id }}" {{ $attribute->id == $selectedId ? 'selected' : '' }}>
                                            {{ $attribute->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="button" class="btn btn-warning remove-dropdown mt-2 mb-2">Remove</button>
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
        const minValue = {{ $minValue }};
        let currentCount = document.querySelectorAll('.attribute-dropdown').length; // Get the initial count from DOM

        // Add new dropdown
        document.getElementById('add-dropdown').addEventListener('click', function() {
            if (currentCount < maxValue) {
                currentCount++;
                const dropdownsDiv = document.getElementById('attribute-dropdowns');

                const newDropdown = document.createElement('div');
                newDropdown.className = 'form-group attribute-dropdown';
                newDropdown.id = `dropdown-${currentCount}`;
                newDropdown.innerHTML = `
                    <label for="attribute_${currentCount}">Filter Attribute : ${currentCount}</label>
                    <select name="attributes[]" class="form-control" required>
                        <option value="">Select an attribute</option>
                        @foreach($attributes as $attribute)
                <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                        @endforeach
                </select>
                <button type="button" class="btn btn-warning remove-dropdown mt-2 mb-2">Remove</button>
`;

                dropdownsDiv.appendChild(newDropdown);

                // Add remove functionality to the new dropdown
                addRemoveButtonListener(newDropdown);
            } else {
                alert('Maximum number of attributes reached.');
            }

            updateSerialNumbers();
        });

        // Function to add remove functionality
        function addRemoveButtonListener(dropdown) {
            const removeButton = dropdown.querySelector('.remove-dropdown');
            if (removeButton) {  // Check if removeButton exists
                removeButton.addEventListener('click', function() {
                    if (currentCount > minValue) {
                        dropdown.remove();
                        currentCount--; // Decrement current count on remove
                        updateSerialNumbers(); // Update numbering when dropdown is removed
                    } else {
                        alert('Cannot remove any more attributes.');
                    }
                });
            }
        }

        // Function to update serial numbers dynamically
        function updateSerialNumbers() {
            const dropdowns = document.querySelectorAll('.attribute-dropdown');
            dropdowns.forEach((dropdown, index) => {
                const label = dropdown.querySelector('label');
                label.textContent = `Filter Attribute : ${index + 1}`;
            });
        }

        // Validate form on submission
        document.getElementById('ai-search-filters-form').addEventListener('submit', function(event) {
            const selects = document.querySelectorAll('select[name="attributes[]"]');
            let hasSelected = false;

            selects.forEach(select => {
                if (select.value) {
                    hasSelected = true;
                }
            });

            if (!hasSelected) {
                event.preventDefault();
                alert('Please select at least one attribute.');
            }
        });

        // Apply remove functionality to initial dropdowns
        document.querySelectorAll('.attribute-dropdown').forEach(addRemoveButtonListener);
    </script>
</x-admin-layout>
