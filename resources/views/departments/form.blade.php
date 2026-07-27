@csrf

<div class="mb-4">
    <label class="block text-sm font-medium">Department Code</label>
    <input type="text"
           name="department_code"
           value="{{ old('department_code', $department->department_code ?? '') }}"
           class="w-full border rounded px-3 py-2">
    @error('department_code')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium">Department Name</label>
    <input type="text"
           name="department_name"
           value="{{ old('department_name', $department->department_name ?? '') }}"
           class="w-full border rounded px-3 py-2">
    @error('department_name')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium">Institution</label>
    <select name="institution_id" class="w-full border rounded px-3 py-2">
        <option value="">Select Institution</option>

        @foreach($institutions as $institution)
            <option value="{{ $institution->id }}"
                @selected(old('institution_id', $department->institution_id ?? '') == $institution->id)>
                {{ $institution->institution_name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-4">
    <label class="block text-sm font-medium">HOD</label>
    <input type="text"
           name="hod"
           value="{{ old('hod', $department->hod ?? '') }}"
           class="w-full border rounded px-3 py-2">
</div>

<div class="mb-4">
    <label class="block text-sm font-medium">Description</label>
    <textarea name="description"
              class="w-full border rounded px-3 py-2">{{ old('description', $department->description ?? '') }}</textarea>
</div>

<div class="mb-4">
    <label class="block text-sm font-medium">Status</label>

    <select name="status" class="w-full border rounded px-3 py-2">
        <option value="1" @selected(old('status', $department->status ?? 1)==1)>Active</option>
        <option value="0" @selected(old('status', $department->status ?? 1)==0)>Inactive</option>
    </select>
</div>

<button type="submit"
        class="bg-blue-600 text-white px-4 py-2 rounded">
    Save Department
</button>