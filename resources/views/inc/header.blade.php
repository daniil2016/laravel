<header>
  <div class="bg-dark collapse" id="navbarHeader" style="">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Меню</h4>
          <ul class="list-unstyled">
            <li><a href="{{ route('about') }}" class="text-white">О нас</a></li>
            <li><a href="{{ route('contact') }}" class="text-white">Контакты</a></li>
            <li><a href="{{ route('contact-data') }}" class="text-white">Сообщения</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="/" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
        <strong>Laravel test</strong>
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>