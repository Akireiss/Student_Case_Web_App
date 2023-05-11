@include('includes.header')

<nav x-data="{ isOpen: false }" class="relative bg-white">
    <div class="container px-6 py-4 mx-auto">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <div class="text-xl font-semibold text-gray-700">
                    <a class="text-2xl font-bold transition-colors duration-300 transform text-green-400 lg:text-3xl dark:hover:text-green-500"
                        href="#">CZCMNHS</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8">
                        @guest
                        @if (Route::has('login'))
                        <a href="{{ url('login') }}"
                        class="px-3 py-2 mx-3 mt-2 transition-colors duration-300 transform rounded-full lg:mt-0 text-black hover:bg-gray-100 dark:hover:bg-green-500 hover:text-white">
                        Login</a>
                        @endif
                        @if (Route::has('register'))
                    <a href="{{ url('register') }}"
                        class="px-3 py-2 mx-3 mt-2 transition-colors duration-300 transform rounded-full lg:mt-0 text-black hover:bg-gray-100 dark:hover:bg-green-500 hover:text-white">
                        Register</a>

                        @endif

                        @else
                        {{-- px-3 py-2 mx-3 mt-2 transition-colors duration-300 transform rounded-full lg:mt-0 text-black hover:bg-gray-100 dark:hover:bg-green-500 hover:text-white --}}
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="inline-flex items-center justify-center px-3 py-2 mx-3 mt-2 transition-colors duration-300 transform rounded-full lg:mt-0 text-black hover:bg-gray-100 dark:hover:bg-green-500 hover:text-white">
                              <span>{{ Auth::user()->name }}</span>
                              <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.293 14.293a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L10 11.586l3.293-3.293a1 1 0 011.414 1.414l-4 4z" clip-rule="evenodd" />
                              </svg>
                            </button>

                            <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                              <div class="py-1" role="none">
                                <a  href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Dashboard</a>
                                <a href="{{ route('profile.show') }}"  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Manage Account</a>
                                <a  class="block px-4 py-2 text-sm text-red-700 hover:bg-red-100 hover:text-red-900" role="menuitem"
                                href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Log Out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                              </div>
                            </div>
                          </div>
                          @endguest

                    </div>
            </div>
        </div>
    </div>
</nav>


<div class="pt-24 p-5">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <p class="uppercase tracking-loose w-full  ">CASTOR Z. CONCEPCION MEMORIAL NATIONAL HIGH SCHOOL</p>
        <h1 class="my-4 text-5xl font-bold leading-tight text-black ">
   {{-- Second Commit Here Again --}}
          Lorem ipsum dolor sit amet.

        </h1>
        <p class="leading-normal text-2xl mb-8 ">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, voluptatum.
        </p>

      </div>
      <!--Right Col-->
      <div class="w-full md:w-3/5 py-6 text-center">
        <img class="w-full md:w-4/5 z-50" src="{{ url('assets/img/main.svg') }}" />
      </div>
    </div>
  </div>


  <div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>

      </g>
    </svg>
  </div>

@include('includes.footer')
