@props(['listing'])
<x-layout>
    @include('partials.nav')

    <!-- about -->
    <section class="about" id="about">
        <div class="container container-about">
            <div class="about-content">
                <div class="about-image">
                    <img src="{{asset('storage/'.$listing->logo)}}" alt="">
                </div>
                <div class="about-text">
                    <div class="title">
                        
                        <h2>{{$listing->name}}</h2>
                        <p>{{$listing->location}}</p>
                        <p><strong>{{$listing->tags}}</strong></p>
                        
                    </div>
                    <p>{{$listing->description}}</p>
                    <p></p>
                    <p></p>
                    
                    <div class="button-container">
                        
                        <button onclick="location.href='/gallery/{{$listing->id}}/edit'" class="btn-update">Update</button>
                            <form action="/gallery/{{$listing->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>

                        <button onclick="location.href='/'" class="btn-delete">Delete</button>
                            {{-- class="btn-delete" --}}
                        
                    </div>
                    
                    
                </div>
                
            </div>
        </div>

       
        
    </section>
    <!-- end of about -->
</x-layout>