<x-layout>

<x-header>
    <x-banner>
    </x-banner>
</x-header>

<x-wrapper>
@unless(count($listings)==0)
@foreach($listings as $list)
<x-listing-card :list="$list">
</x-listing-card>
@endforeach

@else
    <h1 style="font-size:30px; position:absolute;left:85vh; margin-top:5rem">No listings found in the gallery <h1>
@endunless

</x-wrapper>
    

</x-layout>


