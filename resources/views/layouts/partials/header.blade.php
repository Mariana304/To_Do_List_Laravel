<header>
    
    <nav>
       
        <div class="container   h-auto grid grid-cols-2  w-auto  p-9 mx-auto mt-3 ">

        <p class=" flex flex-col border border-amber-300 mx-2 italic h-9 py-1 rounded-lg bg-amber-300  text-center w-28"> <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></p>

            <p class=" flex flex-col border border-amber-300 italic bg-amber-300 h-9 py-1 rounded-lg text-center mx-2 w-28 "><a href="{{ route('tasks.index') }}" class="{{ request()->routeIs('tasks.*') ? 'active' : '' }}">Tareas</a></p>


        </div>
    
    </nav>
</header>
