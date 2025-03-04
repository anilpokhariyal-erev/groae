<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Attribute</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('attributes.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('attributes.store') }}" id="attribute-form">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">System Name <span class="text-danger" title="Only Hyphen allowed. Spaces and special characters not allowed.">*</span></label>
                            <input name="name" id="name" type="text" value="{{ old('name') }}" class="form-control" onkeyup="checkInput(this)">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                            <div id="suggestions" class="suggestions-box"></div>
                        </div>

                        <div class="position-relative form-group">
                            <label for="label">Label <span class="text-danger">*</span></label>
                            <input name="label" id="label" type="text" value="{{ old('label') }}" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('label')" />
                            <div id="label-suggestions" class="suggestions-box"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('status')" />
                        </div>
                        <div class="position-relative form-group">
                            <label for="sort_order">Sort Order <span class="text-danger">*</span></label>
                            <input 
                                name="sort_order" 
                                id="sort_order" 
                                type="number" 
                                value="{{ old('sort_order') }}" 
                                class="form-control" 
                                min="0" 
                                step="0.01"
                            >
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('sort_order')" />
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <input type="checkbox" name="show_in_calculator" id="show_in_calculator" value="1" {{ old('show_in_calculator') ? 'checked' : '' }}>
                            <label for="trending">Visible on calculator</label>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('show_in_calculator')" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <input type="checkbox" name="allow_any" id="allow_any" value="1" {{ old('allow_any') ? 'checked' : '' }}>
                            <label for="allow_any">Allow Any</label>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('allow_any')" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <input type="checkbox" name="allow_multiple" id="allow_multiple" value="1" {{ old('allow_multiple', 1) ? 'checked' : '' }}>
                            <label for="allow_multiple">Allow Multiple</label>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('allow_multiple')" />
                        </div>
                    </div>

                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>

    <script>

        function checkInput(input, type = 'name') {
            const value = input.value;
            const regex = /^[a-zA-Z0-9-_]*$/; // Allow letters, numbers, and underscore only

            if (!regex.test(value)) {
                input.setCustomValidity("Only underscore, letters, and numbers are allowed.");
            } else {
                input.setCustomValidity("");
                fetchSuggestions(value, type);
            }
        }

        function fetchSuggestions(query, type) {
            if (query.length < 2) {
                const suggestionsBox = document.getElementById(type === 'name' ? 'suggestions' : 'label-suggestions');
                suggestionsBox.innerHTML = '';
                suggestionsBox.style.display = 'none';
                return;
            }

            fetch(`/admin/attributes/suggestions?query=${query}&type=${type}`)
                .then(response => response.json())
                .then(data => {
                    const suggestionsBox = document.getElementById(type === 'name' ? 'suggestions' : 'label-suggestions');
                    suggestionsBox.innerHTML = data.map(item =>
                        `<div class="suggestion" onclick="selectSuggestion('${item}', '${type}')">${item}</div>`
                    ).join('');
                    suggestionsBox.style.display = data.length ? 'block' : 'none';
                });
        }

        function selectSuggestion(value, type) {
            const input = document.getElementById(type);
            input.value = value;
            const suggestionsBox = document.getElementById(type === 'name' ? 'suggestions' : 'label-suggestions');
            suggestionsBox.innerHTML = '';
            suggestionsBox.style.display = 'none';
        }

        // Hide suggestions when clicking outside
        document.addEventListener('click', function(event) {
            const nameSuggestionsBox = document.getElementById('suggestions');
            const labelSuggestionsBox = document.getElementById('label-suggestions');
            if (!event.target.closest('#name') && !event.target.closest('#label')) {
                nameSuggestionsBox.innerHTML = '';
                nameSuggestionsBox.style.display = 'none';
                labelSuggestionsBox.innerHTML = '';
                labelSuggestionsBox.style.display = 'none';
            }
        });

    </script>

</x-admin-layout>
