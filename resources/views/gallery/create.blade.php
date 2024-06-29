<x-layout>
@include('partials.nav')

<main>
    <div class="login-container">
        <h2>Create Gallery Form</h2>
        <form action="/gallery" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <label for="logo">Photo</label>
                <input type="file" id="logo" name="logo" required>
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{old('name')}}" required>

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="input-group">
                <label for="tags">Tags</label>
                <input type="text" id="tags" name="tags" value="{{old('tags')}}" required>
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                    
            </div>

            <div class="input-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" value="{{old('location')}}" required>
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="input-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" value="{{old('description')}}" required>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <button type="submit">Sumbit</button>
        </form>
    </div>
</main>
</x-layout>