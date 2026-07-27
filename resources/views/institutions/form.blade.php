<div class="grid grid-cols-2 gap-6">

    <div>
        <label class="block font-semibold mb-2">Institution Code</label>

        <input type="text"
               name="institution_code"
               value="{{ old('institution_code', $institution->institution_code ?? '') }}"
               class="w-full border rounded p-2">

        @error('institution_code')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block font-semibold mb-2">Institution Name</label>

        <input type="text"
               name="institution_name"
               value="{{ old('institution_name', $institution->institution_name ?? '') }}"
               class="w-full border rounded p-2">

        @error('institution_name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block font-semibold mb-2">Institution Type</label>

        <select name="institution_type"
                class="w-full border rounded p-2">

            <option value="">Select</option>
            <option value="School">School</option>
            <option value="College">College</option>
            <option value="University">University</option>
            <option value="Polytechnic">Polytechnic</option>

        </select>
    </div>

    <div>
        <label class="block font-semibold mb-2">Affiliation</label>

        <input type="text"
               name="affiliation"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">City</label>

        <input type="text"
               name="city"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">State</label>

        <input type="text"
               name="state"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">Country</label>

        <input type="text"
               name="country"
               value="India"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">Postal Code</label>

        <input type="text"
               name="postal_code"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">Phone</label>

        <input type="text"
               name="phone"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">Email</label>

        <input type="email"
               name="email"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">Website</label>

        <input type="url"
               name="website"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">Principal Name</label>

        <input type="text"
               name="principal_name"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">Established Year</label>

        <input type="number"
               name="established_year"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">Logo</label>

        <input type="file"
               name="logo"
               class="w-full border rounded p-2">
    </div>

    <div>
        <label class="block font-semibold mb-2">Status</label>

        <select name="status"
                class="w-full border rounded p-2">

            <option value="1">Active</option>
            <option value="0">Inactive</option>

        </select>
    </div>

</div>

<div class="mt-6">
    <label class="block font-semibold mb-2">Address</label>

    <textarea name="address"
              rows="4"
              class="w-full border rounded p-2"></textarea>
</div>