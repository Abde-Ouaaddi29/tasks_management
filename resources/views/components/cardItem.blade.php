@props(['todo'])

<div
      @if ($todo->isCompleted)
         class="border p-4 bg-gray-100 flex justify-between items-center  "
      @else
         class="border p-4 bg-gray-300 flex justify-between items-center "
      @endif  >

   <div
         @if ($todo->isCompleted)
            class=" py-2 w-8/12 text-gray-400 mr-2 overflow-y-auto line-through opacity-60"
         @else
            class=" py-2 w-8/12 mr-2 overflow-y-auto"
         @endif
   >
      <span>{{ $todo->item }}</span>
   </div>

   <div class=" w-4/12 px-2 flex justify-between items-center border-l border-gray-500">
      <div>
         <span
               @if ($todo->isCompleted)
                   class=" text-gray-400 opacity-60"
               @else
                   class=" text-gray-400"
               @endif
           >
           {{ $todo->created_at->format('Y-m-d || H:i') }}
        </span>
      </div>

      @if ($todo->isCompleted)
            <form action=" {{ route('todo.destroy', $todo->id ) }} " method="POST">
               @csrf
               @method('DELETE')
                 <button class="text-red-500 hover:scale-105 transition-all" type="submit">
                     @svg('fluentui-delete-20', ['style' => 'height: 28px; width: 28px; fill:red;'])
                 </button>
                 {{-- <input class="bg-red-200 text-red-700 py-1 px-2 rounded hover:bg-red-300 hover:scale-105 transition-all" type="submit" value="delete"> --}}
            </form>
      @endif

         <form action="{{route('todo.update', $todo->id)}}" method="POST">
            @csrf
            @method('PUT')
            <button class=" p-1 rounded  hover:scale-105 transition-all" type="submit" name="iscCompleted" value="{{ old( $todo->isCompleted) }}">
                     @if ($todo->isCompleted)
                       @svg('ik-ok', ['style' => 'height: 28px; width: 28px; stroke: green;'])
                     @else
                       @svg('fluentui-checkbox-unchecked-16-o', ['style' => 'height: 28px; width: 28px; stroke: gray;']) 
                     @endif    
            </button>
         </form>
      
         {{-- @if ($todo->isCompleted)
         @svg('ik-ok', ['style' => 'height: 35px; width: 35px; stroke: green;'])
      @else
         @svg('uni-process-thin', ['style' => 'height: 25px; width: 25px; stroke: green;'])
      @endif
   --}}
   </div>
    
</div>