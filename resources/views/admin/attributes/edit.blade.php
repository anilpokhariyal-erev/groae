<x-admin-layout>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Attribute</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('attributes.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('attributes.update', $attribute->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="name">System Name <span class="text-danger" title="Only Hyphen allowed. Spaces and special characters not allowed.">*</span></label>
                            <input name="name" id="name" type="text" value="{{ old('name', $attribute->name) }}" class="form-control" onkeyup="checkInput(this)" readonly>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                            <div id="suggestions" class="suggestions-box"></div>
                        </div>

                        <div class="position-relative form-group">
                            <label for="label">Label <span class="text-danger">*</span></label>
                            <input name="label" id="label" type="text" value="{{ old('label', $attribute->label) }}" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('label')" />
                            <div id="label-suggestions" class="suggestions-box"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ old('status', $attribute->status) == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $attribute->status) == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('status')" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Checkbox for Visibility in Calculator -->
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <input type="checkbox" name="show_in_calculator" id="show_in_calculator" value="1" {{ old('show_in_calculator', $attribute->show_in_calculator) ? 'checked' : '' }}>
                            <label for="show_in_calculator">Visible on calculator</label>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('show_in_calculator')" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <input type="checkbox" name="allow_any" id="allow_any" value="1" {{ old('allow_any', $attribute->allow_any) ? 'checked' : '' }}>
                            <label for="allow_any">Allow Any</label>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('allow_any')" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <input type="checkbox" name="allow_multiple" id="allow_multiple" value="1" {{ old('allow_multiple', $attribute->allow_multiple ?? 1) ? 'checked' : '' }}>
                            <label for="allow_multiple">Allow Multiple</label>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('allow_multiple')" />
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <!-- Dynamic Attribute Options -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="attribute_values">Attribute Options</label>
                            <div id="attribute-options-container">
                                @if(old('attribute_options', $attribute->options))
                                    @foreach(old('attribute_options', $attribute->options) as $key => $option)
                                        <div class="attribute-option-item d-flex mb-2">
                                            @if($option->status==1)
                                                <input type="text" name="attribute_options[]" class="form-control mr-2" value="{{ $option->value }}" placeholder="Enter option value">
                                                <button type="button" class="btn btn-danger" onclick="removeOption(this)" title="Disable">X</button>
                                            @else
                                                <input type="text" name="attribute_del_options[]" class="form-control mr-2 del_option" value="{{ $option->value }}" placeholder="Enter option value">
                                                <button type="button" class="btn btn-danger" onclick="addOption(this)" title="Enable"><i class="fa fa-check"></i></button>
                                            @endif
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button type="button" class="btn btn-success mt-2" id="add-attribute-option">Add Option</button>
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('add-attribute-option').addEventListener('click', function () {
            const container = document.getElementById('attribute-options-container');
            const optionItem = document.createElement('div');
            optionItem.classList.add('attribute-option-item');
            optionItem.innerHTML = `
                <input type="text" name="attribute_options[]" class="form-control mb-2" placeholder="Enter option value">
                <button type="button" class="btn btn-danger" onclick="removeOption(this)">X</button>
            `;
            container.appendChild(optionItem);
        });

        function removeOption(button) {
            button.parentElement.remove();
        }

        function addOption(button) {
            // Convert button.parentElement to a jQuery object
            let val = $(button).parent().find('input[name="attribute_del_options[]"]').val();
            $('#add-attribute-option').click();
            $('input[name="attribute_options[]"]:last').val(val);
            removeOption(button);
        }


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
