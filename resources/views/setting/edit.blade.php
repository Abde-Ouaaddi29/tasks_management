<x-app title="setting">
    <div class=" flex justify-center items-center p-4 ">   
          <div class="lg:w-6/12 w-full  ">
            <div class="flex items-center justify-center my-2 p-2  ">
              <span class="text-xl"> update your information </span>
            </div>
            <form class="border p-6" action="{{ route('setting.update') }}" method="POST">
            @csrf
            @method('PUT')

              <div class="mb-4">
                <label
                  class="block text-gray-700 text-sm font-bold mb-2"
                  htmlFor="username">
                  name
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 mb-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="username"
                  value="{{ Auth::user()->name }}"
                  type="text"
                  name="name"
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
                  value="{{ Auth::user()->email }}"
                  type="email"
                  name="email"
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
                  password
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
              <div class="mb-6">
                <label
                  class="block text-gray-700 text-sm font-bold mb-2"
                  htmlFor="new_password"
                >
                 new password <span class="text-sm font-light text-gray-00">(not necessary to change password ! )</span>
                </label>
                <input
                  class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline"
                  id="new_password"
                  type="password"
                  name="new_password"
                  placeholder="***********"
                  />
                  @error('new_password')
                   <span class="text-red-400"> * {{ $message }}</span>
                  @enderror
                
              </div>

              <div class="flex items-center justify-between">
                <button
                  type="submit"
                  class="disabled:bg-red-200 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                >
                  update
                </button>
               
              </div>
            </form>
          </div>
        </div>
</x-app>