<header class="banner flex container-xl h-24 mt-6 invisible relative z-40">
  <div class="breadcrumbs">
    @php 
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    @endphp
  </div>
  <a class="brand w-32 mr-6 absolute right-0 " href="{{ home_url('/') }}"><svg class="w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.76 40.03" aria-label="KIN type" width="200" style="opacity: 1; visibility: inherit;"><path d="M78.58 11.11c-1.53-3.79-2-6.76-.3-9.71C78.83.44 72 6 72 10.36s3.22 10.47 3.86 14.32a11.09 11.09 0 01-1.46 7.85 11.3 11.3 0 00-4.65 2.35c-1.12 1.12-2.4 2.78-3.52 4.18h.11a8.49 8.49 0 017.6-1.06c3.52 1.05 5.7 2.21 8.58 1.16 2.18-.8 5.8-4.1 6.23-5.07h-.2A4.36 4.36 0 0184 35.43c-2.45-.54-3.26-2.07-5.42-2.74a7.38 7.38 0 00-4-.19s6.23-2.63 7.07-7.62c.9-5.35-3-13.61-3-13.61z"></path><path d="M79.45 10.53c1.12-1.09 6.23-5.8 9.8-4.61 3.17 1.07 3.39 3.14 3.8 6.81.46 4.09.16 19.67.16 22.32 0 3.29 1.67 4.12 3.15 4.37a5.21 5.21 0 003.26-.42c1.92-.89 4.14-4.34 4.14-4.34l-.23-.07c-.63.48-3.31 2.09-3.5-1.5-.11-1.9.62-21.67.12-24.71-.44-2.66-1.24-7-7.4-7.28C87.49.88 80.39 9 79.2 10.38M55.52 7.81h-.27c-.55.63-6.1 3.66-5.37 8.58.5 3.32 3.33 6.91 4 9.07s.95 3.94-1.06 6.2c-.06.07.19.06.19.06s4.48-3.54 5.61-5.76a8.38 8.38 0 00-.36-8.58c-1.13-1.84-2-3.26-2.55-4.39-1.92-3.79-.15-5.13-.15-5.13"></path><path d="M41.39 7.51s3.12-3.33 3.88-4.09C47 1.68 48.33-.09 52.81.2c2.24.14 7.21 2.44 9.8 2.46 4.56 0 5.86-1.39 5.86-1.39h.11c-.67.83-2.69 3.11-4.13 4.55A7.17 7.17 0 0158 7.92c-3.14-.53-7.89-2.61-10.23-2.49a15.14 15.14 0 00-6.19 2.09zM41.56 39.35S44.16 35.79 45 35c1.82-1.69 3.46-3.41 8-3 2.27.2 6.16 3.07 8.79 3.08a10.13 10.13 0 005.43-1.38h.13a36.84 36.84 0 01-3.81 4.3 7.38 7.38 0 01-6.6 1.9c-3.18-.61-6.13-2.79-8.52-2.73a17 17 0 00-6.66 2.19zM20.15 21.75c1.36-1.18 2.62-2.28 3.89-3.37l.49-.43A4.2 4.2 0 0130 18a10.22 10.22 0 012.47 3.59c.59 1.28 3.39 8.83 4 10.1a15.33 15.33 0 001 1.65 3.32 3.32 0 005.23.48A15.91 15.91 0 0139.38 38a5.62 5.62 0 01-2.59 1.45 3.87 3.87 0 01-3.52-1 10.12 10.12 0 01-2.3-3.7c-.51-1.2-3.23-8.67-3.78-9.84a5.66 5.66 0 00-2.92-3.07 6.24 6.24 0 00-3.48-.14l-.37.06a2 2 0 01-.27 0M11.68 31.26c1.21-1.62 1-3.37.53-5.13a26.39 26.39 0 00-2.44-5.58 9.71 9.71 0 01-1.17-4A6.9 6.9 0 0110.08 12a17.08 17.08 0 014.26-3.82c-1.26 1.55-1 3.23-.27 4.83.82 1.91 1.81 3.76 2.76 5.62A7.87 7.87 0 0115.58 28a18.91 18.91 0 01-3.9 3.28M23.74 32.45c-1.78 2.06-3.37 4.29-5.53 6a5.62 5.62 0 01-5.81.77c-1.21-.47-2.39-1-3.57-1.58a5.05 5.05 0 00-5.7.71 4.73 4.73 0 01-.43.31v-.11a51.21 51.21 0 015.84-5.37 5.48 5.48 0 015.84-.72c.94.41 1.87.87 2.84 1.24 2.29.87 4.44.77 6.3-1l.24-.2M21.06.55c-1.79 2.05-3.37 4.29-5.53 6a5.62 5.62 0 01-5.81.77c-1.21-.47-2.39-1-3.57-1.57a5 5 0 00-5.7.7c-.13.11-.28.21-.43.32v-.12a52.14 52.14 0 015.82-5.4 5.48 5.48 0 015.84-.72c.94.41 1.87.87 2.84 1.24 2.29.87 4.44.78 6.3-1l.24-.19M39.48 3.08C37.84 4.8 36.35 6.49 34.72 8c-.55.52-7.28 7-7.64 7.05s3.42-3.82 4.18-4.95c.11-.16 0-.52-.46-.5a6.46 6.46 0 01-2.32-.41c-1.32-.44-2.63-.91-4-1.35a4.62 4.62 0 00-4.91 1.06.91.91 0 01-.4.22c.1-.12.19-.25.3-.36 1.67-1.67 3.29-3.39 5-5a5.35 5.35 0 015.71-1 38 38 0 004.14 1.28 5 5 0 004.82-1h.27"></path></svg></a>
</header>
