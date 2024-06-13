<div class="container">
    <h1 class="title">{{ $title }}</h1>
    <form method="POST" action="{{ route($section . '.' . $route, $object ?? null) }}">
        @csrf
        @if ($method !== 'POST')
            @method($method)
        @endif

        <div class="input-cont">
            <label for="name" class="title-obj">Name</label>
            <input type="text" name="name" id="name" class="form-input"
                value="{{ old('name', $object->name ?? '') }}">
        </div>
        @if ($section == 'products')

            <div class="input-cont">
                <label for="description" class="description-obj">Description</label>
                <textarea type="text" name="description" id="description" class="form-textarea">
                {{ old('name', $object->description ?? '') }}
            </textarea>
            </div>
            <div class="input-cont">
                <label for="price" class="title-obj">Price</label>
                <input type="number" name="price" id="price" class="form-input"
                    value="{{ old('price', $object->price ?? '') }}">
            </div>
            <div class="input-cont">
                <label for="state" class="state-obj">State</label>
                <select name="state" id="state" class="form-select">
                    <option value="available" {{ old('state', $object->state ?? '') == 'available' ? 'selected' : '' }}>
                        Available
                    </option>
                    <option value="unavailable"
                        {{ old('state', $object->state ?? '') == 'unavailable' ? 'selected' : '' }}>
                        Unavailable
                    </option>
                    <option value="unknown" {{ old('state', $object->state ?? '') == 'unknown' ? 'selected' : '' }}>
                        Unknown
                    </option>
                </select>
            </div>
            <div class="input-cont">
                <label for="brand" class="form-label">Brand</label>
                <select name="brand_id" id="brand_id" class="form-select">
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}"
                            {{ old('brand', $object->brand_id ?? '') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
        @elseif($section == 'categories')
            <div class="input-cont">
                <label for="parent" class="form-label">Parente</label>
                <select name="parent_id" id="parent_id" class="form-select">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category', $object->parent_id ?? '') == $category->id ? 'selected' : '' }}>
                            {{ $category->id }}</option>
                    @endforeach
                </select>
            </div>

        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
