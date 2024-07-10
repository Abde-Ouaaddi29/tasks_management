<div class="w-full p-4">
    @if (session()->has('success'))
        <x-alert typeone='bg-green-100' typetow='border-green-500' typethree='text-green-500' >
         {{session('success')}}
        </x-alert> 
    @endif

    
    @if (session()->has('failed'))
      <x-alert typeone='bg-red-100' typetow='border-red-500' typethree='text-red-700' >
          {{session('failed')}}
      </x-alert>
        
    @endif

</div>