<x-app-layout>
    @section('content')
        <ul id="movies-list">
            <!-- Movies will be displayed here -->
        </ul>

        <script>
            // Use fetch to get data from the API
            fetch('http://127.0.0.1:8000/api/v1/movies')
                .then(response => response.json()) // Convert the response to JSON
                .then(data => {
                    if (data.data) {
                        const movies = data.data; // Access the movies array from the response
                        const moviesList = document.getElementById('movies-list');

                        // Loop through movies and append them to the list
                        movies.forEach(function(movie) {
                            const listItem = document.createElement('li');
                            listItem.innerHTML = `
                                <strong>Title:</strong> ${movie.title}<br>
                                <strong>Description:</strong> ${movie.description}<br>
                                <strong>Release Date:</strong> ${movie.release_date}<br>
                                <strong>Duration:</strong> ${movie.duration} minutes<br>
                                <strong>Language:</strong> ${movie.language}<br>
                                <strong>Country:</strong> ${movie.country}<br>
                                <strong>Rating:</strong> ${movie.rating}<br>
                                <strong>Poster:</strong> <img src="${movie.poster_url}" alt="${movie.title} poster"><br>
                                <strong>Trailer:</strong> <a href="${movie.trailer_url}" target="_blank">Watch Trailer</a>
                            `;
                            moviesList.appendChild(listItem);
                        });
                    } else {
                        console.log('Error:', data.message);
                    }
                })
                .catch(error => {
                    console.error('There was an error fetching the movies:', error);
                });
        </script>
    @endsection
</x-app-layout>
