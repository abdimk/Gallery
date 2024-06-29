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
    <h2>No listings found in the gallery<h2>
@endunless

</x-wrapper>
    

</x-layout>


