@props(['listing'])

<x-layout>
@include('partials.nav')


<section class="about" id="about">
    <div class="container container-about">
        <div class="about-content">
            <div class="about-image">
                <img src="{{asset('storage/'.$listing->logo)}}" alt="">
            </div>
            <div class="about-text">
               
                <div class="login-container-v2" style="margin-left:2rem">
                    <h2>Edit Gallery</h2>
                
                    <form action="/gallery/{{$listing->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <label for="logo">Photo</label>
                            <input type="file" id="logo" name="logo" value="{{$listing->logo}}">
                        </div>
        
                        <div class="input-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{$listing->name}}" required>
            
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
            
                        </div>
        
                        <div class="input-group">
                            <label for="tags">Tags</label>
                            <input type="text" id="tags" name="tags" value="{{$listing->tags}}" required>
                            @error('tags')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                                
                        </div>
        
                        <div class="input-group">
                            <label for="location">Location</label>
                            <input type="text" id="location" name="location" value="{{$listing->location}}" required>
                            @error('location')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
        
                        <div class="input-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" value="{{$listing->description}}" required>
            
                            @error('description')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
        
                        <div class="button-container">
                            <button type="submit" class="btn-update">Update</button>
                            <button type="button" onclick='location.href="#"'  class="btn-delete">Back</button>
                        </div>
                    </form>
                </div>
            
            
                
               
                
                
            </div>
            
        </div>
    </div>

   
    
</section>
</x-layout>