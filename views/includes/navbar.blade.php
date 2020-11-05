<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{action('ControladorChido@index')}}">PINTORES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{action('ControladorChido@Alexandre')}}">Alexandre Cabanel<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{action('ControladorChido@Pieter')}}">Pieter Brueghel<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{action('ControladorChido@Henri')}}">Henri Rousseau<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{action('ControladorChido@Jean')}}">Jean-Leon Geróme<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{action('ControladorChido@Dali')}}">Salvador Dalí<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{action('ControladorChido@Contacto')}}" tabindex="-1" aria-disabled="true">Contacto</a>
        </li>
      </ul>
    </div>
</nav>