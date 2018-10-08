<nav id="menu">
    <ul id="menu-main-menu" class="menu menu-main">
        <li @if ($current_menu=='inicio')class='current-menu-item' @endif>
            <a href="{{ route('index') }}"><span>Inicio</span></a>
        </li>
        <li @if ($current_menu=='nosotros')class='current-menu-item' @endif >
            <a href="{{ route('nosotros') }}"><span>Nosotros</span></a>
        </li>
        <li @if ($current_menu=='productos')class='current-menu-item' @endif>
            <a href="{{ route('productos') }}"><span>Productos</span></a>
        </li>
        <li @if ($current_menu=='garantia')class='current-menu-item' @endif>
            <a href="{{ route('garantia') }}"><span>Garantia</span></a>
        </li>
        <li @if ($current_menu=='servicios')class='current-menu-item' @endif>
            <a href="{{ route('servicios') }}"><span>Servicios</span></a>
        </li>
        <li @if ($current_menu=='contactanos')class='current-menu-item' @endif>
            <a href="{{ route('contactanos') }}"><span>Contactenos</span></a>
        </li>
        @foreach ($redes as $item)
        <li class="{{ $item->titulo }}">
            <a href="{{ $item->enlace_simple }}" title="{{ $item->titulo }}"><i class="{{ $item->icono }}"></i></a>
        </li>
        @endforeach
    </ul>
</nav>
