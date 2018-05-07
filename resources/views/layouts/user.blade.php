<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="/img/avatar.png" class="img-circle elevation-2" alt="Imagem do Usuário">
    </div>
    <div class="info">
        <a href="{{ route( 'users.edit', Auth::user()->id )}}" class="d-block">{{ Auth::user()->name }}</a>
    </div>
</div>