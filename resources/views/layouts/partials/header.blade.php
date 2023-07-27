<header>
    <h1>Menu</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

            </li>

            <li><a href="{{ route('tasks.index') }}" class="{{ request()->routeIs('tasks.*') ? 'active' : '' }}">Tareas</a>

            </li>


        </ul>
    </nav>
</header>
