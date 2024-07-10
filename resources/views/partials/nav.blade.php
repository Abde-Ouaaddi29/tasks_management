

<div class="container bg-purple-300 z-20 top-0 start-0 border-b flex justify-center items-center  ">

  <nav class=" w-10/12">

    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
       <a href="{{ route('todo.index') }}" class="text-white"> 
        <img class="w-9 h-9" src="{{ asset('storage/approve.png') }}" alt="">
        {{-- @svg('si-todoist', ['style' => 'height: 24px; width: 24px;']) --}}
       </a>
      
      
      
    
    <div class="  justify-between items-center hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex items-center flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  ">
      @guest
          <li>
            <a href="{{ route('login.login') }}" class="block py-2 px-3 text-white bg-purple-800 rounded md:bg-transparent md:text-purple-800 md:p-0 md:dark:text-purple-800" >login</a>
          </li>
          <li>
            <a href="{{ route('user.create') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-800 md:p-0 md:dark:hover:text-purple-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">sgin up</a>
          </li>
      @endguest
        @auth

            <div class="relative ">
              <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-purple-600  hover:bg-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-purple-500 dark:hover:bg-purple-600 dark:focus:ring-purple-200" type="button"> {{ Auth::user()->name }} <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
                
                <!-- Dropdown menu -->
                <div id="dropdown" class=" hidden absolute left-0 right-0 top-12 bg-white  text-black rounded-lg shadow border dark:bg-white">
                    <ul class="py-2 text-sm  " aria-labelledby="dropdownDefaultButton">
                    
                      <li>
                        <a href="{{ route('setting.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-purple-300 dark:hover:text-white">settings</a>
                      </li>
                      <li>
                        <form action="{{ route('logout') }}" method="POST" class="hover:bg-gray-100 dark:hover:bg-purple-300">
                            @csrf
                            <button type="submit" class="block px-4 py-2  dark:hover:text-white">Logout</button>
                        </form>
                      </li>
                    </ul>
                </div>
            </div>
        @endauth
    
      </ul>
    </div>
    </div>
  </nav>

</div>
  

  


<script>
  document.addEventListener('DOMContentLoaded', function() {
      const dropdownButton = document.getElementById('dropdownDefaultButton');
      const dropdownMenu = document.getElementById('dropdown');

      dropdownButton.addEventListener('click', function() {
          dropdownMenu.classList.toggle('hidden');
      });
  });
</script>