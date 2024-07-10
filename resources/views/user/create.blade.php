<x-app title="sign up">
    <div class=" flex justify-center items-center p-4 h-[80vh]">   
          <div class="lg:w-6/12 w-full  ">
            <div class="flex items-center justify-center my-2 p-2  ">
              <span class="text-xl"> Sign up </span>
            </div>
            <form action="{{ route('user.store') }}"  method="post"
              class="bg-white shadow-md rounded p-6 my-4" >
              @csrf 
              <div class="mb-4">
                <label
                  class="block text-gray-700 text-sm font-bold mb-2"
                  htmlFor="username">
                  name
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 mb-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="username"
                  type="text"
                  name="name"
                  value="{{ old('name') }}"
                  placeholder="Username"/>
                  @error('name')
                    <span class="text-red-400"> * {{ $message }}</span>
                  @enderror
              </div>

              <div class="mb-4">
                <label
                  class="block text-gray-700 text-sm font-bold mb-2"
                  htmlFor="username"
                >
                  email
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 mb-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="email"
                  type="email"
                  name="email"
                  value="{{ old('email') }}"
                  placeholder="email"/>
                  @error('email')
                    <span class="text-red-400"> * {{ $message }}</span>
                  @enderror
              </div>
              
              <div class="mb-6">
                <label
                  class="block text-gray-700 text-sm font-bold mb-2"
                  htmlFor="password"
                >
                  mot de passe
                </label>
                <input
                  class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline"
                  id="password"
                  type="password"
                  name="password"
                  placeholder="***********"
                  />
                  @error('password')
                   <span class="text-red-400"> * {{ $message }}</span>
                  @enderror
               
              </div>
              <div class="flex items-center justify-between">
                <button
                  type="submit"
                  
                  class="disabled:bg-red-200 bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                >
                  Entrer
                </button>
               
              </div>
            </form>
          </div>
        </div>
</x-app>