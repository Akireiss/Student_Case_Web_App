
@extends('layouts.admin.index')

@section('content')
    <!-- cards -->    <div class="w-full px-6 py-6 mx-auto">
      <!-- row 1 -->
      <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Students</p>
                    <h5 class="mb-0 font-bold">
                      34
                      <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none fa-solid fa-users text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm ">Reports</p>
                    <h5 class="mb-0 font-bold">
                      50
                      <span class="leading-normal text-sm font-weight-bolder text-lime-500">+3%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none fa-solid fa-file-circle-exclamation text-lg relative top-3.5 text-white"></i>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Student Case</p>
                    <h5 class="mb-0 font-bold">
                      +35
                      <span class="leading-normal text-red-600 text-sm font-weight-bolder">-2%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <i class="ni leading-none fa-solid fa-scale-balanced text-lg relative top-3.5 text-white"></i>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card4 -->

      </div>


      <!-- cards row 3 -->

      <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-5/12 lg:flex-none">
          <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="flex-auto p-4">
              <div class="py-4 pr-1 mb-4 bg-gradient-to-tl from-gray-900 to-slate-800 rounded-xl">
                <div>
                  <canvas id="chart-bars" height="170"></canvas>
                </div>
              </div>
              <h6 class="mt-6 mb-0 ml-2">Incedents</h6>

              <div class="w-full px-6 mx-auto max-w-screen-2xl rounded-xl">
                <div class="flex flex-wrap mt-0 -mx-3">
                  <div class="flex-none w-1/4 max-w-full py-4 pl-0 pr-3 mt-0">
                    <div class="flex mb-2">


                    </div>

                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
          <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
              <h6>Behavours</h6>
              <p class="leading-normal text-sm">
                <i class="fa fa-arrow-up text-lime-500"></i>

              </p>
            </div>
            <div class="flex-auto p-4">
              <div>
                <canvas id="chart-line" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- cards row 4 -->

      <div class="flex flex-wrap my-6 -mx-3">
        <!-- card 1 -->

        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 lg:flex-none">
          <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
              <div class="flex flex-wrap mt-0 -mx-3">
                <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                  <h6>Recent Reports</h6>
                  <p class="mb-0 leading-normal text-sm">
                    <i class="fa fa-check text-cyan-500"></i>
                    <span class="ml-1 font-semibold">30 done</span>
                    this month
                  </p>
                </div>
                <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                  <div class="relative pr-6 lg:float-right">
                    <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-slate-400"></i>
                    </a>
                    <p class="hidden transform-dropdown-show"></p>

                    <ul dropdown-menu class="z-100 text-sm transform-dropdown shadow-soft-3xl
                    duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none
                    absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4
                    text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40
                     before:text-white before:transition-all before:content-['\f0d8']">
                      <li class="relative">
                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal
                         text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Action</a>
                      </li>
                      <li class="relative">
                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal
                         text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Another action</a>
                      </li>
                      <li class="relative">
                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal
                         text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-auto p-6 px-0 pb-2">
              <div class="overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent
                       border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Name</th>
                      <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle
                      bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Violation</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs
                      whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Reporter</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid
                      text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Lorem</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>



                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- card 2 -->


      </div>

      <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
          <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
              <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                Student Case Web
                <script>
                  document.write(new Date().getFullYear() + ",");
                </script>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- end cards -->
  </main>




@endsection
