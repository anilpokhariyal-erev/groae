<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Create Attribute Option</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('admin.attribute-options.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;
            <form method="post" action="{{ route('admin.attribute-options.store') }}">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="attribute_id">Attribute <span class="text-danger">*</span></label>
                            <select name="attribute_id" id="attribute_id" class="form-control">
                                <option value="">Select Attribute</option>
                                @foreach($attributes as $attribute)
                                    <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('attribute_id')" />
                        </div>

                        <div class="position-relative form-group">
                            <label for="value">Value <span class="text-danger">*</span></label>
                            <input name="value" id="value" type="text" value="{{ old('value') }}" class="form-control">
                            <ul id="suggestions" class="list-group" style="display: none; max-height: 150px; overflow-y: auto;"></ul>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('value')" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('status')" />
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

        function fetchSuggestions(query) {
            if (query.length > 1) {
                fetch(`/admin/attribute-options/suggestions?query=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        const suggestionsBox = document.getElementById('suggestions');
                        suggestionsBox.innerHTML = data.map(item =>
                            `<div class="suggestion" onclick="selectSuggestion('${item}')">${item}</div>`
                        ).join('');
                        suggestionsBox.style.display = data.length ? 'block' : 'none';
                    });
            } else {
                document.getElementById('suggestions').style.display = 'none';
            }
        }

        function selectSuggestion(value) {
            const input = document.getElementById('value');
            input.value = value;
            const suggestionsBox = document.getElementById('suggestions');
            suggestionsBox.innerHTML = '';
            suggestionsBox.style.display = 'none';
        }
    </script>

</x-admin-layout>
