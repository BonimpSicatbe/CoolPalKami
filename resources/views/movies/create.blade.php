<x-app-layout>
    <x-section>
        <div class="text-3xl font-bold uppercase text-center">Add New Movie</div>

        <form action="{{ route('movies.store') }}" method="post" class="grid grid-cols-2 gap-4">
            @csrf
            <div class="w-full">
                <label for="title" class="block">Title</label>
                <input type="text" name="title" id="title" class="w-full input input-bordered"
                    placeholder="Title">
                @error('title')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="w-full">
                <label for="director" class="block">Director</label>
                <input type="text" name="director" id="director" class="w-full input input-bordered"
                    placeholder="Director">
                @error('director')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="w-full">
                <label for="date" class="block">Date</label>
                <input type="datetime-local" name="date" id="date" class="w-full input input-bordered"
                    placeholder="Date">
                @error('date')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="w-full">
                <label for="cast" class="block">Cast</label>
                <input type="text" name="cast" id="cast" class="w-full input input-bordered"
                    placeholder="Cast">
                @error('cast')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="w-full">
                <label for="run_time" class="block">Run time</label>
                <input type="text" name="run_time" id="run_time" class="w-full input input-bordered"
                    placeholder="Run_time">
                @error('run_time')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="w-full">
                <label for="synopsis" class="block">Synopsis</label>
                <input type="text" name="synopsis" id="synopsis" class="w-full input input-bordered"
                    placeholder="Synopsis">
                @error('synopsis')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-span-2 text-center">
                <button class="btn btn-md btn-success text-white w-1/2">Add Movie</button>
            </div>
        </form>
    </x-section>
</x-app-layout>
{{--
title
director
date
cast
run_time
synopsis
created_at
updated_at
--}}
