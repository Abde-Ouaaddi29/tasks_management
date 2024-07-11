<x-app title="index">

   <div class="container w-10/12 m-auto p-3">
      <div class="text-center text-2xl font-light tracking-wider mb-4 flex justify-center items-center"> 
        <span class="mr-2">Task List</span> 
        @svg('ik-ok', ['style' => 'height: 35px; width: 35px;'])
      </div>
      <div class="mt-4">
          @include('todo.create')
      </div>
   </div>

   @if ($todos->count() > 0)
      <div class=" ">
        <div class=" w-10/12 m-auto p-8">
            @foreach ($todos as $todo)  
            <div class="mb-5"> <x-cardItem :todo="$todo" /></div>
            @endforeach
        </div>
      </div>
      <div>
        {{-- {{Auth::user()->id}} --}}
        <div class="pagination bg-gray-500 p-2 flex justify-center items-center">
          {{ $todos->links() }}
        </div>
   @else
       <div class="bg-gray-400 text-center p-2">
           No Tasks
       </div>
   @endif
   </div>
</x-app>