<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite('resources/css/app.css')
    <title>Nav Bar</title>
</head>
<body>
<header class="z-30 w-full px-2 py-4 bg-white sm:px-4">
  <div class="flex items-center justify-between mx-auto max-w-7xl">
    <a href="/" title="Kutty Home Page" class="flex items-center">
      <svg class="w-auto h-6" width="86" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 335 93">
        <path
          d="M134.71 45.7599c1.32-1.44 2.67-2.94 4.05-4.5 1.44-1.56 2.82-3.09 4.14-4.59 1.32-1.56 2.55-3.03 3.69-4.41 1.2-1.38 2.22-2.58 3.06-3.6h15.93c-3.18 3.66-6.3 7.17-9.36 10.53-3 3.3-6.3 6.72-9.9 10.26 1.8 1.62 3.66 3.57 5.58 5.85 1.92 2.22 3.78 4.53 5.58 6.93 1.8 2.4 3.45 4.8 4.95 7.2 1.5 2.4 2.76 4.59 3.78 6.57h-15.39c-.96-1.56-2.07-3.27-3.33-5.13-1.2-1.92-2.49-3.81-3.87-5.67-1.38-1.92-2.85-3.75-4.41-5.49-1.5-1.74-3-3.21-4.5-4.41v20.7H121.3V8.31991l13.41-2.16V45.7599zM209.35 74.3799c-2.28.66-5.22 1.26-8.82 1.8-3.6.6-7.38.9-11.34.9-4.02 0-7.38-.54-10.08-1.62-2.64-1.08-4.74-2.58-6.3-4.5-1.56-1.98-2.67-4.32-3.33-7.02-.66-2.7-.99-5.67-.99-8.91v-26.37h13.41v24.75c0 4.32.57 7.44 1.71 9.36 1.14 1.92 3.27 2.88 6.39 2.88.96 0 1.98-.03 3.06-.09 1.08-.12 2.04-.24 2.88-.36v-36.54h13.41v45.72zM217.888 16.8699l13.41-2.16v13.95h16.11v11.16h-16.11v16.65c0 2.82.48 5.07 1.44 6.75 1.02 1.68 3.03 2.52 6.03 2.52 1.44 0 2.91-.12 4.41-.36 1.56-.3 2.97-.69 4.23-1.17l1.89 10.44c-1.62.66-3.42 1.23-5.4 1.71-1.98.48-4.41.72-7.29.72-3.66 0-6.69-.48-9.09-1.44-2.4-1.02-4.32-2.4-5.76-4.14-1.44-1.8-2.46-3.96-3.06-6.48-.54-2.52-.81-5.31-.81-8.37v-39.78zM254.279 16.8699l13.409-2.16v13.95h16.11v11.16h-16.11v16.65c0 2.82.48 5.07 1.44 6.75 1.02 1.68 3.03 2.52 6.03 2.52 1.44 0 2.91-.12 4.41-.36 1.56-.3 2.97-.69 4.23-1.17l1.891 10.44c-1.62.66-3.421 1.23-5.401 1.71s-4.409.72-7.289.72c-3.66 0-6.691-.48-9.091-1.44-2.4-1.02-4.32-2.4-5.76-4.14-1.44-1.8-2.459-3.96-3.059-6.48-.54-2.52-.81-5.31-.81-8.37v-39.78zM334.028 28.6599c-2.7 9.12-5.52 17.67-8.46 25.65-2.94 7.98-6.15 15.72-9.63 23.22-1.26 2.7-2.52 4.98-3.78 6.84-1.26 1.92-2.64 3.48-4.14 4.68-1.5 1.26-3.21 2.16-5.13 2.7-1.86.6-4.05.9-6.57.9-2.1 0-4.05-.21-5.85-.63-1.74-.36-3.18-.78-4.32-1.26l2.34-10.71c1.38.48 2.61.81 3.69.99 1.08.18 2.22.27 3.42.27 2.4 0 4.23-.66 5.49-1.98 1.32-1.26 2.43-3.03 3.33-5.31-3.06-6-6.12-12.72-9.18-20.16-3.06-7.5-5.94-15.9-8.64-25.2h14.22c.6 2.34 1.29 4.89 2.07 7.65.84 2.7 1.71 5.46 2.61 8.28.9 2.76 1.8 5.46 2.7 8.1.96 2.64 1.86 5.04 2.7 7.2.78-2.16 1.59-4.56 2.43-7.2.84-2.64 1.65-5.34 2.43-8.1.84-2.82 1.62-5.58 2.34-8.28.78-2.76 1.47-5.31 2.07-7.65h13.86z"
          fill="#1A202C"
        />
        <path
          d="M5.61825.4114C24.3953-2.95442 43.4551 21.1695 51.21 34.8757v29.6906c-4.8347 14.2497-12.952 19.1401-20.8473 19.362-12.7347.358-22.758-14.27-17.6881-25.9574 2.926-6.7451 8.905-10.1655 13.0016-11.2189C5.61473 45.9161.32294 23.2628.01461 7.98884-.05756 4.41366 2.09844 1.04233 5.61825.4114z"
          fill="#9E58E9"
        />
        <path
          d="M96.8018.4114C78.0247-2.95442 58.9649 21.1695 51.21 34.8757v29.6906c4.8347 14.2497 12.952 19.1401 20.8474 19.362 12.7346.358 22.7579-14.27 17.688-25.9574-2.9259-6.7451-8.905-10.1655-13.0015-11.2189 20.0614-.8359 25.3531-23.4892 25.6611-38.76316.073-3.57518-2.083-6.94651-5.6032-7.57744z"
          fill="#7629C8"
        />
      </svg>
      <span class="sr-only">Kutty</span>
    </a>
    <div class="flex items-center space-x-1">
      <div class="hidden space-x-1 md:inline-flex">
        <a href="#" class="btn btn-sm btn-link">Home</a>
        <a href="#" class="btn btn-sm btn-link">About</a>
        <a href="#" class="btn btn-sm btn-link">Blog</a>
        <a href="#" class="btn btn-sm btn-link">Contact</a>
           <a href="#" class="btn btn-sm btn-link">Services</a>
        <a href="#" class="btn btn-sm btn-link">Sign in</a>
      </div>
      <a href="#" class="btn btn-sm btn-primary">Get Started</a>
      <div class="inline-flex md:hidden" x-data="{ open: false }">
        <button class="flex-none px-2 btn btn-link btn-sm" @click="open = true">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
            class="w-5 h-5"
          >
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
          <span class="sr-only">Open Menu</span>
        </button>
        <div class="absolute top-0 left-0 right-0 z-50 flex flex-col p-2 pb-4 m-2 space-y-3 bg-white rounded shadow" x-show.transition="open" @click.away="open = false" x-cloak>
          <button class="self-end flex-none px-2 ml-2 btn btn-link btn-icon" @click="open = false">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
            >
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
            <span class="sr-only">Close Menu</span>
          </button>
          <a href="#" class="w-full btn btn-link">Home</a>
          <a href="#" class="w-full btn btn-link">About</a>
          <a href="#" class="w-full btn btn-link">Blog</a>
          <a href="#" class="w-full btn btn-link">Contact</a>
            <a href="#" class="w-full btn btn-link">Services</a>
          <a href="#" class="w-full btn btn-link">Sign in</a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Remove the div below -->
<div class="py-32 bg-gray-400"></div>

    <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/kutty.min.js"></script>
</body>
</html>