<x-layout>
    @include('partials.nav')
    
    <main>
        <div class="login-container">
            <h2>Register a new user</h2>
            <form action="/users" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{old('name')}}" required>
    
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
    
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{old('email')}}" required>
    
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
    
                </div>
    
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="{{old('password')}}" required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                        
                </div>
    
                <button type="submit">Register</button>
            </form>

            <p class="mt-5"> Already have an account <a href="/login">Login</a></p>
        </div>
    </main>
    </x-layout>