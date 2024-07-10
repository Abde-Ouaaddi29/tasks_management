<x-app title="login">
    <div class=" flex justify-center items-center p-4 ">   
          <div class="lg:w-6/12 w-full  ">
            <div class="flex items-center justify-center mb-5 ">
              <span class=""> login </span>
            </div>
            <form action="{{ route('login.auth') }}"  method="POST"
              class="bg-white shadow-md  rounded p-6 mb-4 ">
              @csrf
              @method('POST')

             
              <div class="mb-4">
                <label
                  class="block text-gray-700 text-sm font-bold mb-2"
                  htmlFor="email"
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
                  class="disabled:bg-purple-200 bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                >
                  Entrer
                </button>
                  <a class="underline text-purple-500" href="{{ route('user.create') }}">I have no account !</a>
               
              </div>
            </form>
          </div>
        </div>
</x-app>