<x-admin-layout>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="ba_flex justify-between">
                <div class="ba_flex align_items_center">
                    <h5 class="card-heading">Edit Activity</h5>
                </div>

                <div class="ba_flex align_items_center">
                    <a href="{{ route('activity.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            &nbsp;

            <form method="post" action="{{ route('activity.update', $activity->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="activity_group">Activity Group <span class="text-danger">*</span></label>
                            <select name="activity_group_id" class="custom-select">
                                <option value="">Select Activity Group</option>
                                @foreach($activityGroups as $activityGroup)
                                    <option value="{{ $activityGroup->id }}" 
                                        {{ old('activity_group_id', $activity->activity_group_id) == $activityGroup->id ? 'selected' : '' }}>
                                        {{ $activityGroup->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('activity_group_id')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="name">Activity Name <span class="text-danger">*</span></label>
                            <input name="name" id="name" value="{{ old('name', $activity->name) }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $activity->description) }}</textarea>
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('description')" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input name="price" id="price" value="{{ old('price', $activity->price) }}" type="text" class="form-control">
                            <x-input-error class="mt-2 text-red" :messages="$errors->get('price')" />
                        </div>
                    </div>
                </div>

                <div class="ba_flex align_items_center">
                    <button class="mt-1 btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</x-admin-layout>
