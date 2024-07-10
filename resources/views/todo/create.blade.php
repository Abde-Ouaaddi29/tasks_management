<div class="flex justify-center">
   <form class=" w-full flex justify-center items-center" action="{{ route('todo.store') }}" method="post">
      @csrf
      <input class="border-2 py-2 px-3 w-6/12 mr-2 outline-purple-300 rounder" name="item" type="text" placeholder="typing">      
      <button class="text-white tracking-wider font-bold py-2 px-5 rounded bg-purple-400 hover:bg-purple-500" type="submit">Add </button>
   </form>
</div>