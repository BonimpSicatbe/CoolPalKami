<x-app-layout>
    <div class="flex flex-col justify-center items-center w-screen h-screen">
        <div class="container mx-auto space-y-4 text-md p-8 rounded-lg border border-gray-500">
            <div class="grid grid-cols-2 gap-4 text-2xl font-black uppercase">
                <div class=""><span class="capitalize">id: </span>{{ $movie->id }}</div>
                <div class=""><span class="capitalize">title: </span>{{ $movie->title }}</div>
            </div>
            <div class="grid grid-cols-2">
                <span class="capitalize">director: </span>{{ $movie->director }}</div>
            <div class="grid grid-cols-2">
                <span class="capitalize">date: </span>{{ $movie->date }}</div>
            <div class="grid grid-cols-2">
                <span class="capitalize">cast: </span>{{ $movie->cast }}</div>
            <div class="grid grid-cols-2">
                <span class="capitalize">runTime: </span>{{ $movie->runTime }}</div>
            <div class="grid grid-cols-2">
                <span class="capitalize">synopsis: </span>{{ $movie->synopsis }}</div>
            <div class="grid grid-cols-2">
                <span class="capitalize">createdAt: </span>{{ $movie->createdAt }}</div>
            <div class="grid grid-cols-2">
                <span class="capitalize">updatedAt: </span>{{ $movie->updatedAt }}</div>
        </div>
    </div>
</x-app-layout>
