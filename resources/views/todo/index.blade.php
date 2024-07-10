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

   <div class=" ">
    <div class=" w-10/12 m-auto p-8">
        @foreach ($todos as $todo)  
         <div class="mb-5"> <x-cardItem :todo="$todo" /></div>
        @endforeach
    </div>
   </div>
   <div>
     {{-- {{Auth::user()->id}} --}}
      {{-- <div class="">
        {{ $todos->links() }}
     </div> --}}
   </div>
</x-app>