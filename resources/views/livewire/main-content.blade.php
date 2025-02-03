<div class="h-full overflow-y-auto bg-[#030712] text-white p-20">
    <!-- Main Header -->
    <header id="introduction" class="mb-10">
        <h1 class="text-4xl font-extrabold"><span class="text-red-500 mr-2">#</span>Welcome to the Broadway Shows API
            Docs</h1>
    </header>

    <!-- Documentation Sections -->
    <div id="overview" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Overview</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Welcome to the Broadway API! This API
                provide comprehensive access to information about Broadway shows. Our RESTful API enables developers to:
            </p>
            <ul class="list-disc text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">
                <li>Access current and upcoming Broadway show information</li>
                <li>View performance schedules and showtimes</li>
                <!-- <li>Ticket Availability and Pricing</li> -->
                <li>Access show reviews</li>
            </ul>
            <h2 class="text-gray-400 mt-6 text-2xl font-bold leading-relaxed ml-5 mr-20">Key Features</h2>
            <ul class="list-disc text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">
                <li>RESTful endpoints delivering JSON responses</li>
                <li>Historic Performance Data</li>
                <li>Broadway Shows Reviews</li>
                <li>Detailed Cast and Directors information</li>
            </ul>
        </div>
    </div>

    <div id="getting-started" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Getting Started</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Follow these steps to start using the
                Broadway Shows API:</p>
            <ol class="list-decimal space-y-8 mt-6 ml-10 mr-20 text-gray-400">
                <li>
                    <h3 class="text-xl font-semibold text-[#d7d7db] mb-2">Credentials</h3>
                    <div class="p-2 bg-gray-700 rounded-lg max-w-2xl">
                        <div class="flex flex-col gap-2">
                            <div class="badge badge-outline badge- rounded-md font-bold">HEADER</div>
                            @if (Auth::check())
                                <input type="text" class="input input-sm input-bordered" placeholder="Authentication"
                                    disabled="disabled">
                            @else
                                <input type="text" class="input input-sm input-bordered disabled"
                                    placeholder="Authentication" disabled>
                            @endif

                            <a href="{{ route('login') }}" class="flex flex-row gap-4 items-center hover:link">
                                <i class="fa-solid fa-key"></i>
                                <span>Log in to use your API keys</span>
                            </a>
                        </div>
                    </div>
                </li>

                <!-- <li>
                    <h3 class="text-xl font-semibold text-[#d7d7db] mb-2">Register for API Access</h3>
                    <p class="leading-relaxed">Visit <span class="text-blue-400"></span> to create your account and
                        receive your API credentials:</p>
                    <ul class="list-disc ml-6 mt-2 space-y-1">
                        <li>API Key</li>
                        <li>Client ID</li>
                        <li>Client Secret</li>
                    </ul>
                </li>
                <li>
                    <h3 class="text-xl font-semibold text-[#d7d7db] mb-2">Authentication Setup</h3>
                    <p class="leading-relaxed">Authenticate your requests using OAuth 2.0. Here's a basic cURL
                        example:(NOT)</p>
                    <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">
                    curl -X POST \
                    'https://api.broadwayshows.com/oauth/token' \
                    -H 'Content-Type: application/x-www-form-urlencoded' \
                    -d 'grant_type=client_credentials' \
                    -d 'client_id=YOUR_CLIENT_ID' \
                    -d 'client_secret=YOUR_CLIENT_SECRET'
                </pre>
                </li>
                <li>
                    <h3 class="text-xl font-semibold text-[#d7d7db] mb-2">Make Your First API Call</h3>
                    <p class="leading-relaxed">Try getting a list of current Broadway shows:(NOT DONE)</p>
                    <pre class="bg-gray-800 p-4 rounded-lg mt-2 overflow-x-auto">
                    curl -X GET \
                    'https://api.broadwayshows.com/v1/shows/current' \
                    -H 'Authorization: Bearer YOUR_ACCESS_TOKEN'
                </pre>
                </li> -->
            </ol>
        </div>
    </div>

    <!-- <div id="authentication-and-authorization" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog
            </p>

        </div>
    </div> -->


    <hr class="mt-16 border-gray-700" />

    <!-- MOVIES API -->

    <h1 id="movies-api" class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Movies API</h1>

    <div id="movies-description" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch movies.</p>
        </div>
    </div>

    <div id="movies-base-url" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:
            </p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50"
                href="http://127.0.0.1:8000/api/v1/movies">http://127.0.0.1:8000/api/v1/movies</a>
        </div>
    </div>

    <div id="movies-endpoints" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p
                class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                GET /movies</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all movies in Broadway.
            </p>
            <p
                class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                PUT /movies</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update a movie in Broadway.</p>
            <p
                class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                DELETE /movies</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Delete a particular movie in Broadway.</p>
        </div>
    </div>

    <!-- <div id="movies-auth" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20"></p>
        </div>
    </div> -->

    <div id="movies-parameters" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span>
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- title</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- rating</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map:
                </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    eq</span> equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- string</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- integer</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- decimal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    ne</span> not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lt </span> less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gt</span> greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gte</span> greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lte</span> less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 id="movies-format" class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 id="movies-properties" class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with
                Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed mb-2 ml-5 mr-20">Returns a JSON object with the
                following properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span>
                The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">title</span>
                The title of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">description</span>
                The description about the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">release_date</span>
                The release date of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">duration</span>
                The duration of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">language</span>
                The language used in the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">country</span>
                The country origin of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">rating</span>
                The rating of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">posterURL</span>
                The poster of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">trailerURL</span>
                The trailer of the movie</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 id="movies-request" class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">
<code class="language-javascript">
    fetch('http://127.0.0.1:8000/api/v1/movies', {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => {
        if (!response.ok) {
            return response.text().then(text => {
                throw new Error(text);
            });
        }
        return response.json();
    })
    .then(data => {
        if (data.data) {
            const movies = data.data.slice(0, 2); // Limit to 2 results
            const moviesList = document.getElementById('movies-list');

            // Loop through movies and append them to the list
            movies.forEach(function(movie) {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(movie, null, 2)}</pre>
            `;
                moviesList.appendChild(listItem);
            });
        } else {
            console.log('Error:', data.message);
        }
    })
    .catch(error => {
        console.error('Error fetching movies:', error);
    });
</code>
            </pre>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 id="movies-response" class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>

            <div class="w-full overflow-hidden">
                <ul id="movies-list"></ul>

                @if (Auth::check())
                    <script>
                        const token = "{{ session('auth_token') }}"; // Retrieve from session

                        if (token) {
                            fetch('http://127.0.0.1:8000/api/v1/movies', {
                                    method: 'GET',
                                    headers: {
                                        'Accept': 'application/json',
                                        'Authorization': `Bearer ${token}`
                                    }
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        return response.text().then(text => {
                                            throw new Error(text);
                                        });
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.data) {
                                        const movies = data.data.slice(0, 2); // Limit to 2 results
                                        const moviesList = document.getElementById('movies-list');

                                        // Loop through movies and append them to the list
                                        movies.forEach(function(movie) {
                                            const listItem = document.createElement('li');
                                            listItem.innerHTML = `
                                            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(movie, null, 2)}</pre>
                                        `;
                                            moviesList.appendChild(listItem);
                                        });
                                    } else {
                                        console.log('Error:', data.message);
                                    }
                                })
                                .catch(error => {
                                    console.error('Error fetching movies:', error);
                                });
                        } else {
                            console.error('No auth token found.');
                        }
                    </script>
                @else
                    <div class="text-lg text-gray-200 font-bold">Login to display response.</div>
                @endif
            </div>
        </div>
    </div>

    <div id="movies-errors" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Errors</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">401
                    Authentication Error
                </span> Auto-returns "Uauthenticated"</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">403
                    Authorization Error
                </span> Custom response required</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">404
                    Not Found</span> The requested resources was not found.</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">405
                    Method Not Allowed</span> Web browser tried to access a webpage using an HTTP method (like GET,
                POST, PUT, DELETE) that the server does not allow for that specific resource</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">422
                    Validation Error</span> Auto-returns validation errors</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">500
                    Server Error (Exception)
                </span> Returns "Internal Server Error"</p>
        </div>

    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- ACTORS API -->

    <h1 id="actors-api" class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Actors API</h1>

    <div id="actors-description" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch actors.</p>

        </div>
    </div>

    <div id="actors-base-url" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed mb-2 ml-5 mr-20">The base URL for all API request is:
            </p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50"
                href="http://127.0.0.1:8000/api/v1/actors">http://127.0.0.1:8000/api/v1/actors</a>
        </div>
    </div>

    <div id="actors-endpoints" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p
                class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                GET /actors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all actors in Broadway.
            </p>
            <p
                class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                PUT /actors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update actor's details in Broadway.</p>
            <p
                class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                DELETE /actors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Remove an actor in Broadway.</p>
        </div>
    </div>

    <!-- <div id="actors-auth" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog
            </p>
        </div>
    </div> -->

    <div id="actors-parameters" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span>
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- name</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- birth_date</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map:
                </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    eq</span> equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- string</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- integer</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- decimal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    ne</span> not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lt </span> less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gt</span> greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gte</span> greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lte</span> less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 id="actors-format" class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 id="actors-properties" class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with
                Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Return a JSON object with the following
                properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span>
                The unique identifier of the actor</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">name</span>
                The name of the actor</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">birthDate</span>
                The date of birth of the actor</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">biography</span>
                The biography of the actor</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">profileURL</span>
                The profile picture of the actor</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 id="actors-request" class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">
<code class="language-javascript">
    fetch('http://127.0.0.1:8000/api/v1/actors', {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => {
        if (!response.ok) {
            return response.text().then(text => {
                throw new Error(text);
            });
        }
        return response.json();
    })
    .then(data => {
        if (data.data) {
            const actors = data.data.slice(0, 2); // Limit to 2 results
            const actorsList = document.getElementById('actors-list');

            // Loop through actors and append them to the list
            actors.forEach(function(actor) {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(actor, null, 2)}</pre>
            `;
                actorsList.appendChild(listItem);
            });
        } else {
            console.log('Error:', data.message);
        }
    })
    .catch(error => {
        console.error('Error fetching actors:', error);
    });
</code>
            </pre>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 id="actors-response" class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <div class="w-full overflow-hidden">
                <ul id="actors-list"></ul>

                @if (Auth::check())
                    <script>
                        if (token) {
                            fetch('http://127.0.0.1:8000/api/v1/actors', {
                                    method: 'GET',
                                    headers: {
                                        'Accept': 'application/json',
                                        'Authorization': `Bearer ${token}`
                                    }
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        return response.text().then(text => {
                                            throw new Error(text);
                                        });
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.data) {
                                        const actors = data.data.slice(0, 2); // Limit to 2 results
                                        const actorsList = document.getElementById('actors-list');

                                        // Loop through actors and append them to the list
                                        actors.forEach(function(actor) {
                                            const listItem = document.createElement('li');
                                            listItem.innerHTML = `
                                            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(actor, null, 2)}</pre>
                                        `;
                                            actorsList.appendChild(listItem);
                                        });
                                    } else {
                                        console.log('Error:', data.message);
                                    }
                                })
                                .catch(error => {
                                    console.error('Error fetching actors:', error);
                                });
                        } else {
                            console.error('No auth token found.');
                        }
                    </script>
                @else
                    <div class="text-lg text-gray-200 font-bold">Login to display response.</div>
                @endif
            </div>

        </div>
    </div>

    <div id="actors-errors" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">401
                    Authentication Error
                </span> Auto-returns "Uauthenticated"</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">403
                    Authorization Error
                </span> Custom response required</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">404
                    Not Found</span> The requested resources was not found.</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">405
                    Method Not Allowed</span> Web browser tried to access a webpage using an HTTP method (like GET,
                POST, PUT, DELETE) that the server does not allow for that specific resource</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">422
                    Validation Error</span> Auto-returns validation errors</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">500
                    Server Error (Exception)
                </span> Returns "Internal Server Error"</p>
        </div>

    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- DIRECTORS API -->

    <h1 id="directors-api" class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Directors
        API
    </h1>

    <div id="directors-description" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch directors.</p>
        </div>
    </div>

    <div id="directors-base-url" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:
            </p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50"
                href="http://127.0.0.1:8000/api/v1/directors">http://127.0.0.1:8000/api/v1/directors</a>
        </div>
    </div>

    <div id="directors-endpoints" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p
                class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                GET /directors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all directors in
                Broadway.</p>
            <p
                class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                PUT /directors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update director's details in Broadway.</p>
            <p
                class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                DELETE /directors</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Remove a director in Broadway.</p>
        </div>
    </div>

    <!-- <div id="directors-auth" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy
                dog.</p>
        </div>
    </div> -->

    <div id="directors-parameters" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span>
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- name</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- birth_date</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- profile_url</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map:
                </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    eq</span> equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- string</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- integer</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- decimal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    ne</span> not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lt </span> less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gt</span> greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gte</span> greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lte</span> less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 id="directors-format" class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 id="directors-properties" class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with
                Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Returns a JSON object with the following
                properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span>
                The unique identifier of the director</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">name</span>
                The name of the director</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">birthDate</span>
                The date of birth of the director</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">biography</span>
                The biography of the director</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">profileURL</span>
                The profile picture of the director</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 id="directors-request" class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">
<code class="language-javascript">
    fetch('http://127.0.0.1:8000/api/v1/directors', {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => {
        if (!response.ok) {
            return response.text().then(text => {
                throw new Error(text);
            });
        }
        return response.json();
    })
    .then(data => {
        if (data.data) {
            const directors = data.data.slice(0, 2); // Limit to 2 results
            const directorsList = document.getElementById('directors-list');

            // Loop through directors and append them to the list
            directors.forEach(function(director) {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(director, null, 2)}</pre>
            `;
                directorsList.appendChild(listItem);
            });
        } else {
            console.log('Error:', data.message);
        }
    })
    .catch(error => {
        console.error('Error fetching directors:', error);
    });
</code>
            </pre>
        </div>
    </div>

    <div id="directors-response" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <div class="w-full overflow-hidden">
                <ul id="directors-list"></ul>

                @if (Auth::check())
                    <script>
                        if (token) {
                            fetch('http://127.0.0.1:8000/api/v1/directors', {
                                    method: 'GET',
                                    headers: {
                                        'Accept': 'application/json',
                                        'Authorization': `Bearer ${token}`
                                    }
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        return response.text().then(text => {
                                            throw new Error(text);
                                        });
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.data) {
                                        const directors = data.data.slice(0, 2); // Limit to 2 results
                                        const directorsList = document.getElementById('directors-list');

                                        // Loop through directors and append them to the list
                                        directors.forEach(function(director) {
                                            const listItem = document.createElement('li');
                                            listItem.innerHTML = `
                                            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(director, null, 2)}</pre>
                                        `;
                                            directorsList.appendChild(listItem);
                                        });
                                    } else {
                                        console.log('Error:', data.message);
                                    }
                                })
                                .catch(error => {
                                    console.error('Error fetching directors:', error);
                                });
                        } else {
                            console.error('No auth token found.');
                        }
                    </script>
                @else
                    <div class="text-lg text-gray-200 font-bold">Login to display response.</div>
                @endif
            </div>
        </div>
    </div>

    <div id="directors-errors" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">401
                    Authentication Error
                </span> Auto-returns "Uauthenticated"</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">403
                    Authorization Error
                </span> Custom response required</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">404
                    Not Found</span> The requested resources was not found.</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">405
                    Method Not Allowed</span> Web browser tried to access a webpage using an HTTP method (like GET,
                POST, PUT, DELETE) that the server does not allow for that specific resource</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">422
                    Validation Error</span> Auto-returns validation errors</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">500
                    Server Error (Exception)
                </span> Returns "Internal Server Error"</p>
        </div>
    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- GENRE API -->

    <h1 id="genre-api" class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Genre API</h1>

    <div id="genre-description" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch genres.</p>
        </div>
    </div>

    <div id="genre-base-url" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:
            </p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50"
                href="http://127.0.0.1:8000/api/v1/genres">http://127.0.0.1:8000/api/v1/genres</a>
        </div>
    </div>

    <div id="genre-endpoints" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p
                class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                GET /genres</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all genres in Broadway.
            </p>
            <p
                class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                PUT /genres</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update genre's details in Broadway.</p>
            <p
                class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                DELETE /genres</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Delete a genre in Broadway.</p>
        </div>
    </div>

    <!-- <div id="genre-auth" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog
            </p>
        </div>
    </div> -->

    <div id="genre-parameters" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span>
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- name</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- description</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map:
                </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    eq</span> equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- string</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- integer</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- decimal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    ne</span> not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lt </span> less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gt</span> greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gte</span> greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lte</span> less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 id="genre-format" class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 id="genre-properties" class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with
                Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Returns a JSON object with the following
                properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span>
                The unique identifier of the genre</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">name</span>
                The name of the genre</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">description</span>
                The description about the genre</p>
        </div>
    </div>

    <div id="genre-request" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">
<code class="language-javascript">
    fetch('http://127.0.0.1:8000/api/v1/genres', {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => {
        if (!response.ok) {
            return response.text().then(text => {
                throw new Error(text);
            });
        }
        return response.json();
    })
    .then(data => {
        if (data.data) {
            const genres = data.data.slice(0, 2); // Limit to 2 results
            const genresList = document.getElementById('genres-list');

            // Loop through genres and append them to the list
            genres.forEach(function(genre) {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(genre, null, 2)}</pre>
            `;
                genresList.appendChild(listItem);
            });
        } else {
            console.log('Error:', data.message);
        }
    })
    .catch(error => {
        console.error('Error fetching genres:', error);
    });
</code>
            </pre>
        </div>
    </div>

    <div id="genre-response" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>

            <div class="w-full overflow-hidden">
                <ul id="genres-list"></ul>

                @if (Auth::check())
                    <script>
                        if (token) {
                            fetch('http://127.0.0.1:8000/api/v1/genres', {
                                    method: 'GET',
                                    headers: {
                                        'Accept': 'application/json',
                                        'Authorization': `Bearer ${token}`
                                    }
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        return response.text().then(text => {
                                            throw new Error(text);
                                        });
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.data) {
                                        const genres = data.data.slice(0, 2); // Limit to 2 results
                                        const genresList = document.getElementById('genres-list');

                                        // Loop through genres and append them to the list
                                        genres.forEach(function(genre) {
                                            const listItem = document.createElement('li');
                                            listItem.innerHTML = `
                                            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(genre, null, 2)}</pre>
                                        `;
                                            genresList.appendChild(listItem);
                                        });
                                    } else {
                                        console.log('Error:', data.message);
                                    }
                                })
                                .catch(error => {
                                    console.error('Error fetching genres:', error);
                                });
                        } else {
                            console.error('No auth token found.');
                        }
                    </script>
                @else
                    <div class="text-lg text-gray-200 font-bold">Login to display response.</div>
                @endif
            </div>

        </div>
    </div>

    <div id="genre-errors" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">401
                    Authentication Error
                </span> Auto-returns "Uauthenticated"</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">403
                    Authorization Error
                </span> Custom response required</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">404
                    Not Found</span> The requested resources was not found.</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">405
                    Method Not Allowed</span> Web browser tried to access a webpage using an HTTP method (like GET,
                POST, PUT, DELETE) that the server does not allow for that specific resource</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">422
                    Validation Error</span> Auto-returns validation errors</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">500
                    Server Error (Exception)
                </span> Returns "Internal Server Error"</p>
        </div>
    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- TICKET API -->

    <h1 id="ticket-api" class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Ticket API</h1>

    <div id="ticket-description" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch tickets.</p>
        </div>
    </div>

    <div id="ticket-base-url" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:
            </p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50"
                href="http://127.0.0.1:8000/api/v1/tickets">http://127.0.0.1:8000/api/v1/tickets</a>
        </div>
    </div>

    <div id="ticket-endpoints" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p
                class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                GET /tickets</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all tickets in Broadway.
            </p>
            <p
                class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                PUT /tickets</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update a ticket's details in Broadway.</p>
            <p
                class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                DELETE /tickets</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Delete a particular ticket in Broadway.
            </p>
        </div>
    </div>

    <!-- <div id="ticket-auth" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog
            </p>
        </div>
    </div> -->

    <div id="ticket-parameters" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span>
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- user_id</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- movie_id</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- seat_number</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- show_time</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map:
                </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    eq</span> equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- string</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- integer</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- decimal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    ne</span> not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lt </span> less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gt</span> greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gte</span> greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lte</span> less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 id="ticket-format" class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 id="ticket-properties" class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with
                Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Returns a JSON object with the following
                properties:</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span>
                The unique identifier for ticket</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">userId</span>
                The unique identifier of the user</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">movieId</span>
                The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">showTime</span>
                The time slot of the show</p>
        </div>
    </div>

    <div id="ticket-request" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">
<code class="language-javascript">
    fetch('http://127.0.0.1:8000/api/v1/tickets', {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => {
        if (!response.ok) {
            return response.text().then(text => {
                throw new Error(text);
            });
        }
        return response.json();
    })
    .then(data => {
        if (data.data) {
            const tickets = data.data.slice(0, 2); // Limit to 2 results
            const ticketsList = document.getElementById('tickets-list');

            // Loop through tickets and append them to the list
            tickets.forEach(function(ticket) {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(ticket, null, 2)}</pre>
            `;
                ticketsList.appendChild(listItem);
            });
        } else {
            console.log('Error:', data.message);
        }
    })
    .catch(error => {
        console.error('Error fetching tickets:', error);
    });
</code>
            </pre>
        </div>
    </div>

    <div id="ticket-response" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <div class="w-full overflow-hidden">
                <ul id="tickets-list"></ul>

                @if (Auth::check())
                    <script>
                        if (token) {
                            fetch('http://127.0.0.1:8000/api/v1/tickets', {
                                    method: 'GET',
                                    headers: {
                                        'Accept': 'application/json',
                                        'Authorization': `Bearer ${token}`
                                    }
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        return response.text().then(text => {
                                            throw new Error(text);
                                        });
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.data) {
                                        const tickets = data.data.slice(0, 2); // Limit to 2 results
                                        const ticketsList = document.getElementById('tickets-list');

                                        // Loop through tickets and append them to the list
                                        tickets.forEach(function(ticket) {
                                            const listItem = document.createElement('li');
                                            listItem.innerHTML = `
                                            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(ticket, null, 2)}</pre>
                                        `;
                                            ticketsList.appendChild(listItem);
                                        });
                                    } else {
                                        console.log('Error:', data.message);
                                    }
                                })
                                .catch(error => {
                                    console.error('Error fetching tickets:', error);
                                });
                        } else {
                            console.error('No auth token found.');
                        }
                    </script>
                @else
                    <div class="text-lg text-gray-200 font-bold">Login to display response.</div>
                @endif
            </div>
        </div>
    </div>

    <div id="ticket-errors" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">401
                    Authentication Error
                </span> Auto-returns "Uauthenticated"</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">403
                    Authorization Error
                </span> Custom response required</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">404
                    Not Found</span> The requested resources was not found.</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">405
                    Method Not Allowed</span> Web browser tried to access a webpage using an HTTP method (like GET,
                POST, PUT, DELETE) that the server does not allow for that specific resource</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">422
                    Validation Error</span> Auto-returns validation errors</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">500
                    Server Error (Exception)
                </span> Returns "Internal Server Error"</p>
        </div>
    </div>

    <hr class="mt-16 border-gray-700" />

    <!-- REVIEW API -->

    <h1 id="review-api" class="text-4xl font-extrabold mt-10"><span class="text-red-500 mr-2">#</span>Review API</h1>

    <div id="review-description" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This is an API to fetch reviews.</p>
        </div>
    </div>

    <div id="review-base-url" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Base URL</h2>
            <p class="text-gray-400 mt-6 mb-2 text-xl leading-relaxed ml-5 mr-20">The base URL for all API request is:
            </p>
            <a class="text-red-400 mt-6 text-xl leading-relaxed ml-5 mr-20 bg-gray-400 bg-opacity-20 rounded-lg p-2 transition duration-300 ease-in-out hover:bg-opacity-50"
                href="http://127.0.0.1:8000/api/v1/reviews">http://127.0.0.1:8000/api/v1/reviews</a>
        </div>
    </div>

    <div id="review-endpoints" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Endpoints</h2>
            <p
                class="text-green-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                GET /reviews</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Returns a list of all reviews in Broadway.
            </p>
            <p
                class="text-blue-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                PUT /reviews</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Update a review's details in Broadway.</p>
            <p
                class="text-red-400 mt-6 text-xl leading ml-4 mr-20 bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">
                DELETE /movies</p>
            <p class="text-gray-400 mt-1 text-xl leading-relaxed ml-5 mr-20">Delete a particular review in Broadway.
            </p>
        </div>
    </div>

    <!-- <div id="review-auth" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Authentication and Authorization</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">The quick brown fox jumps over the lazy dog
            </p>
        </div>
    </div> -->

    <div id="review-parameters" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Parameters</h2>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">column_name</span>
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- movie_id</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- user_id</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- rating</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- comment</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">operator_map:
                </span></p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    eq</span> equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- string</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- integer</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-12 pl-6 mb-2"></span>- decimal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    ne</span> not equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lt </span> less than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gt</span> greater than</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    gte</span> greater than or equal</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-10 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">•
                    lte</span> less than or equal</p>
        </div>
    </div>

    <div class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 id="review-format" class="text-3xl font-bold text-[#d7d7db] my-2">Response: </h2>
            <h2 id="review-properties" class="text-2xl font-bold text-[#d7d7db] my-2">Format Type / Properties with
                Description</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">Returns a JSON object with the following
                properties: </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">id</span>
                The unique identifier for the review</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">movieId</span>
                The unique identifier of the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">userId</span>
                The unique identifier of the user</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">rating</span>
                The ratings for the movie</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">comment</span>
                The comments for the movie</p>
        </div>
    </div>

    <div id="review-request" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-3xl font-bold text-[#d7d7db] my-2">Example: </h2>
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Request</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">
<code class="language-javascript">
    fetch('http://127.0.0.1:8000/api/v1/reviews', {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Authorization': `Bearer ${token}`
        }
    })
    .then(response => {
        if (!response.ok) {
            return response.text().then(text => {
                throw new Error(text);
            });
        }
        return response.json();
    })
    .then(data => {
        if (data.data) {
            const reviews = data.data.slice(0, 2); // Limit to 2 results
            const reviewsList = document.getElementById('reviews-list');

            // Loop through reviews and append them to the list
            reviews.forEach(function(review) {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(review, null, 2)}</pre>
            `;
                reviewsList.appendChild(listItem);
            });
        } else {
            console.log('Error:', data.message);
        }
    })
    .catch(error => {
        console.error('Error fetching reviews:', error);
    });
</code>
            </pre>
        </div>
    </div>

    <div id="review-response" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Response</h2>
        </div>
        <div
            class=" p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow mx-5 flex-grow relative overflow-hidden bg-gray-800 w-full">
            <button class="absolute top-2 right-2 text-white font-bold py-1 px-2 rounded"
                onclick="copyToClipboard(this)" title="Copy to clipboard">
                <span id="default-message">
                    <span id="default-icon">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="size-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </span>
                <span id="success-message" class="hidden">
                    <span class="inline-flex items-center">
                        <svg class="size-5 text-blue-700 dark:text-blue-500 me-1.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span class="text-sm font-semibold text-blue-700 dark:text-blue-500">Copied</span>
                    </span>
                </span>
            </button>
            <div class="w-full overflow-hidden">
                <ul id="reviews-list"></ul>

                @if (Auth::check())
                    <script>
                        if (token) {
                            fetch('http://127.0.0.1:8000/api/v1/reviews', {
                                    method: 'GET',
                                    headers: {
                                        'Accept': 'application/json',
                                        'Authorization': `Bearer ${token}`
                                    }
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        return response.text().then(text => {
                                            throw new Error(text);
                                        });
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.data) {
                                        const reviews = data.data.slice(0, 2); // Limit to 2 results
                                        const reviewsList = document.getElementById('reviews-list');

                                        // Loop through reviews and append them to the list
                                        reviews.forEach(function(review) {
                                            const listItem = document.createElement('li');
                                            listItem.innerHTML = `
                                            <pre class="p-1 rounded mt-4 overflow-x-auto break-words whitespace-pre-wrap">${JSON.stringify(review, null, 2)}</pre>
                                        `;
                                            reviewsList.appendChild(listItem);
                                        });
                                    } else {
                                        console.log('Error:', data.message);
                                    }
                                })
                                .catch(error => {
                                    console.error('Error fetching reviews:', error);
                                });
                        } else {
                            console.error('No auth token found.');
                        }
                    </script>
                @else
                    <div class="text-lg text-gray-200 font-bold">Login to display response.</div>
                @endif
            </div>
        </div>
    </div>

    <div id="review-errors" class="space-y-6 mt-11">
        <div class="container ml-5 mr-5">
            <h2 class="text-2xl font-bold text-[#d7d7db] my-2">Error</h2>
            <p class="text-gray-400 mt-6 text-xl leading-relaxed ml-5 mr-20">This API uses the following error codes:
            </p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">401
                    Authentication Error
                </span> Auto-returns "Uauthenticated"</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">403
                    Authorization Error
                </span> Custom response required</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">404
                    Not Found</span> The requested resources was not found.</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">405
                    Method Not Allowed</span> Web browser tried to access a webpage using an HTTP method (like GET,
                POST, PUT, DELETE) that the server does not allow for that specific resource</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">422
                    Validation Error</span> Auto-returns validation errors</p>
            <p class="text-gray-400 text-xl leading-relaxed ml-5 mb-2 mr-20"><span
                    class="text-red-400 text-xl leading bg-gray-400 bg-opacity-20 rounded-lg inline-block p-2 transition duration-300 ease-in-out hover:bg-opacity-50">500
                    Server Error (Exception)
                </span> Returns "Internal Server Error"</p>
        </div>
    </div>
</div>
