<x-app-layout>

    <div class="flex justify-evenly flex-wrap gap-x-4 gap-y-6 mx-10 my-6">
        @foreach($buildings as $building)
            <x-building-card :href="route('buildings.show',[$building->id])">{{$building->name}}</x-building-card>
        @endforeach
    </div>


</x-app-layout>
