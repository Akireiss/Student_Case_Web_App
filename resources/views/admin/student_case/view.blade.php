@extends('layouts.admin.index')

@section('content')

<section class="p-6 mx-auto bg-blueGray-50">
    <div class="w-full mx-auto mt-6">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-white mb-0 px-6 py-6 ">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold px-4">
                        Personal Profile
                    </h6>
                    <div class="inline">
                        <x-button >
                        Edit
                    </x-button>

                        <x-button x-on:click="print()">
                          Print
                        </x-button>

                    </div>

                </div>
            </div>
            <div class="flex-auto px-6 lg:px-10 py-10 pt-0 ">
                <form>
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold uppercase">
                        Personal Information
                    </h6>
                    <div class="flex flex-wrap">

                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                 Last Name
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    First Name
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Middle Name
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>


                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                 Suffix
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Nickname
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>


                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Age
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>



    <div class="w-full lg:w-4/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
             Address
            </label>
            <x-input type="text" class="w-full">
            </x-input>
        </div>
    </div>
    <div class="w-full lg:w-4/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Birthdate
            </label>
            <x-input type="text" class="w-full">
            </x-input>  </div>
    </div>
    <div class="w-full lg:w-4/12 px-4">
        <div class="relative w-full mb-3">
            <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Contact Nume
            </label>
            <x-input type="text" class="w-full">
            </x-input>  </div>
    </div>




                    </div>



                    <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                    Address
                     </p>
                     <div class="flex flex-wrap">
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Barangay
                                 </label>
                                 <x-input type="text" class="w-full">
                                 </x-input>
                             </div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                         City
                                 </label>
                                 <x-input type="text" class="w-full">
                                 </x-input>  </div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                 Province
                                 </label>
                                 <x-input type="text" class="w-full">
                                 </x-input>  </div>
                         </div>
                     </div>



                    <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                        Birthplace
                     </p>
                     <div class="flex flex-wrap">
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Barangay
                                 </label>
                                 <x-input type="text" class="w-full">
                                 </x-input>
                             </div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                         City
                                 </label>
                                 <x-input type="text" class="w-full">
                                 </x-input>  </div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               Province
                                 </label>
                                 <x-input type="text" class="w-full">
                                 </x-input>  </div>
                         </div>



                         <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Sex
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Birth Order
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               Number of Siblings
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>





                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Religion
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                       Mother Tongue
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                             4p's Receipient
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>  </div>
                        </div>

                     </div>

                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold uppercase">
                      Family Background
                    </h6>

                    <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                      Father
                     </p>
                    <div class="flex flex-wrap">


                        <div class="w-full lg-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                   Father Name
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>
                    </div>



                    <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                       Place of Birth
                     </p>
                     <div class="flex flex-wrap">
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                   Age
                                 </label>
                                 <x-input type="text" class="w-full">
                                 </x-input>
                             </div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Occupation
                                 </label>
                                 <x-input type="text" class="w-full">
                                 </x-input>  </div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Contact Number
                                 </label>
                                 <x-input type="text" class="w-full">
                                 </x-input>  </div>
                         </div>
                     </div>



                     <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                        Place Of Work
                         </p>
                         <div class="flex flex-wrap">
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Barangay
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>
                                 </div>
                             </div>
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             City
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>  </div>
                             </div>
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                     Province
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>  </div>
                             </div>


                             <div class="w-full lg:w-1/2 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Office Contact Number
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>  </div>
                            </div>

                            <div class="w-full lg:w-1/2 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                   Monthly Income
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>  </div>
                            </div>
                         </div>







                          <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                            Mother
                           </p>
                          <div class="flex flex-wrap">


                              <div class="w-full lg-full px-4">
                                  <div class="relative w-full mb-3">
                                      <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                         Mother Name
                                      </label>
                                      <x-input type="text" class="w-full">
                                      </x-input>
                                  </div>
                              </div>
                          </div>



                          <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                             Place of Birth
                           </p>
                           <div class="flex flex-wrap">
                               <div class="w-full lg:w-4/12 px-4">
                                   <div class="relative w-full mb-3">
                                       <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                         Age
                                       </label>
                                       <x-input type="text" class="w-full">
                                       </x-input>
                                   </div>
                               </div>
                               <div class="w-full lg:w-4/12 px-4">
                                   <div class="relative w-full mb-3">
                                       <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Occupation
                                       </label>
                                       <x-input type="text" class="w-full">
                                       </x-input>  </div>
                               </div>
                               <div class="w-full lg:w-4/12 px-4">
                                   <div class="relative w-full mb-3">
                                       <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Contact Number
                                       </label>
                                       <x-input type="text" class="w-full">
                                       </x-input>  </div>
                               </div>
                           </div>



                           <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                              Place Of Work
                               </p>
                               <div class="flex flex-wrap">
                                   <div class="w-full lg:w-4/12 px-4">
                                       <div class="relative w-full mb-3">
                                           <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                              Barangay
                                           </label>
                                           <x-input type="text" class="w-full">
                                           </x-input>
                                       </div>
                                   </div>
                                   <div class="w-full lg:w-4/12 px-4">
                                       <div class="relative w-full mb-3">
                                           <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                   City
                                           </label>
                                           <x-input type="text" class="w-full">
                                           </x-input>  </div>
                                   </div>
                                   <div class="w-full lg:w-4/12 px-4">
                                       <div class="relative w-full mb-3">
                                           <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                           Province
                                           </label>
                                           <x-input type="text" class="w-full">
                                           </x-input>  </div>
                                   </div>


                                   <div class="w-full lg:w-1/2 px-4">
                                      <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Office Contact Number
                                          </label>
                                          <x-input type="text" class="w-full">
                                          </x-input>  </div>
                                  </div>

                                  <div class="w-full lg:w-1/2 px-4">
                                      <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                         Monthly Income
                                          </label>
                                          <x-input type="text" class="w-full">
                                          </x-input>  </div>
                                  </div>
                               </div>





                               <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                                Parents are currently:(check which applies below)
                               </p>
                              <div class="flex flex-wrap">


                                  <div class="w-full lg-full px-4">
                                      <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Mother Name
                                          </label>
                                          <x-input type="text" class="w-full">
                                          </x-input>
                                      </div>
                                  </div>
                              </div>



                              <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold uppercase">
                                List down the names of Siblings that are studying at CZCMNHS
                            </h6>
                               <div class="flex flex-wrap">
                                   <div class="w-full lg:w-4/12 px-4">
                                       <div class="relative w-full mb-3">
                                           <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Name
                                           </label>
                                           <x-input type="text" class="w-full">
                                           </x-input>
                                       </div>
                                   </div>
                                   <div class="w-full lg:w-4/12 px-4">
                                       <div class="relative w-full mb-3">
                                           <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Age
                                           </label>
                                           <x-input type="text" class="w-full">
                                           </x-input>  </div>
                                   </div>
                                   <div class="w-full lg:w-4/12 px-4">
                                       <div class="relative w-full mb-3">
                                           <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                              Grade And Section
                                           </label>
                                           <x-input type="text" class="w-full">
                                           </x-input>  </div>
                                   </div>

                                   <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Name
                                        </label>
                                        <x-input type="text" class="w-full">
                                        </x-input>
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Age
                                        </label>
                                        <x-input type="text" class="w-full">
                                        </x-input>  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                           Grade And Section
                                        </label>
                                        <x-input type="text" class="w-full">
                                        </x-input>  </div>
                                </div>



                               </div>




                               <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                                Parent are currently: (check which applies below)
                                </p>
                             <div class="flex flex-wrap flex-col md:flex-row">


                                 <div class="w-full lg:w-1/5 px-2">
                                     <div class="relative w-full mb-3">

                                         <div class="flex">
                                             <div class="flex items-center h-5">
                                                 <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                     type="checkbox" value=""
                                                     class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                             </div>
                                             <div class="ml-2 text-sm">
                                                 <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                                     Living Together
                                                 </label>

                                             </div>
                                         </div>
                                     </div>
                                 </div>


                                 <div class="w-full lg:w-1/5 px-2">
                                    <div class="relative w-full mb-3">

                                        <div class="flex">
                                            <div class="flex items-center h-5">
                                                <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                    type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                            <div class="ml-2 text-sm">
                                                <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                                    Living Together
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/5 px-2">
                                    <div class="relative w-full mb-3">

                                        <div class="flex">
                                            <div class="flex items-center h-5">
                                                <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                    type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                            <div class="ml-2 text-sm">
                                                <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                                    Living Together
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="w-full lg:w-1/5 px-2">
                                    <div class="relative w-full mb-3">

                                        <div class="flex">
                                            <div class="flex items-center h-5">
                                                <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                    type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                            <div class="ml-2 text-sm">
                                                <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                                    Living Together
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>




                    <hr class="mt-6 border-b-1 border-blueGray-300">

                    <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                       Parent are currently: (check which applies below)
                       </p>
                    <div class="flex flex-wrap">


                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">

                                <div class="flex">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox" class="font-medium text-gray-900 ">
                                            Living Together
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">

                                <div class="flex">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox" class="font-medium text-gray-900 ">Separeted</label>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">

                                <div class="flex">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox" class="font-medium text-gray-900 ">Legally Separated</label>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">

                                <div class="flex">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox" class="font-medium text-gray-900 ">With another partner</label>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">

                                <div class="flex">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox" class="font-medium text-gray-900 ">Father is OFW</label>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">

                                <div class="flex">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox" class="font-medium text-gray-900 ">Mother is OFW</label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="flex flex-wrap mt-2">

                        <div class="w-full lg:w-1/2 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Guardians Name
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>   </div>
                        </div>
                        <div class="w-full lg:w-1/2 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Relationship with the Guardian
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>      </div>
                        </div>



                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Contact Number
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>



                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Occupation
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>


                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Age
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>
                            </div>
                        </div>

                    </div>



                    <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                      Address
                         </p>
                         <div class="flex flex-wrap">
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Barangay
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>
                                 </div>
                             </div>
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             City
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>  </div>
                             </div>
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                     Province
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>  </div>
                             </div>
                         </div>




                         <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold ">
                          Educational Background
                        </h6>
                        <div class="flex flex-wrap">

                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Community Services
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>   </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Lorem
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>      </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Schedule Meeting
                                    </label>
                                    <x-input type="date" class="w-full">
                                    </x-input>    </div>
                            </div>
                        </div>








                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold ">
                        Other Relevant Information
                    </h6>
                    <div class="flex flex-wrap">

                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Community Services
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>   </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Lorem
                                </label>
                                <x-input type="text" class="w-full">
                                </x-input>      </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    Schedule Meeting
                                </label>
                                <x-input type="date" class="w-full">
                                </x-input>    </div>
                        </div>
                    </div>









                </form>
            </div>
        </div>
    </div>
</section>

        @endsection
