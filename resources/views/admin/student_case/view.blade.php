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
            <x-input type="date" class="w-full">
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
                                 <select type="text" class="w-full border-gray-300 focus:border-green-500
                                 focus:ring-green-500 rounded-md shadow-sm">
                               <option value="">La Union</option>
                                 </select>
                             </div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                         City
                                 </label>
                                 <select type="text" class="w-full border-gray-300 focus:border-green-500
                                 focus:ring-green-500 rounded-md shadow-sm">
                               <option value="">Balaoan</option>
                                 </select></div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                 Province
                                 </label>
                                 <select type="text" class="w-full border-gray-300 focus:border-green-500
                                 focus:ring-green-500 rounded-md shadow-sm">
                               <option value="">Butubut</option>
                                 </select>  </div>
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
                                 <select type="text" class="w-full border-gray-300 focus:border-green-500
                                 focus:ring-green-500 rounded-md shadow-sm">
                               <option value="">La Union</option>
                               <option value="">Ilocos</option>
                                 </select>
                             </div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                         City
                                 </label>
                                 <select type="text" class="w-full border-gray-300 focus:border-green-500
                                 focus:ring-green-500 rounded-md shadow-sm">
                               <option value="">Balaoan</option>
                               <option value="">Bacnotan</option>
                               <option value="">Bangar</option>
                                 </select> </div>
                         </div>
                         <div class="w-full lg:w-4/12 px-4">
                             <div class="relative w-full mb-3">
                                 <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               Province
                                 </label>
                                 <select type="text" class="w-full border-gray-300 focus:border-green-500
                                 focus:ring-green-500 rounded-md shadow-sm">
                               <option value="">Butubut</option>
                               <option value="">Sur</option>
                                 </select>
                                  </div>
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
                                <x-input type="number" class="w-full">
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
                                <div class="flex">
                                    <div class="flex items-center mr-4">
                                        <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="inline-radio" class="ml-2 text-sm font-medium text-black">Yes</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="inline-2-radio" class="ml-2 text-sm font-medium text-black">No</label>
                                    </div>
                                </div>

</div>
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




                         <h6 class="text-blueGray-400 text-sm mt-3 mb-6 px-4 font-bold uppercase">
                       Educational Background
                          </h6>
                          <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                            Grade 5
                               </p>
                        <div class="flex flex-wrap">

                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Name of School
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>   </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        School Year Attended
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>      </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        General Average
                                    </label>
                                    <x-input type="number" class="w-full">
                                    </x-input>    </div>
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
                                Grade 6
                                   </p>
                            <div class="flex flex-wrap">

                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Name of School
                                        </label>
                                        <x-input type="text" class="w-full">
                                        </x-input>   </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            School Year Attended
                                        </label>
                                        <x-input type="text" class="w-full">
                                        </x-input>      </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            General Average
                                        </label>
                                        <x-input type="number" class="w-full">
                                        </x-input>    </div>
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
                                    Grade 7
                                       </p>
                                <div class="flex flex-wrap">

                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                Name of School
                                            </label>
                                            <x-input type="text" class="w-full">
                                            </x-input>   </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                School Year Attended
                                            </label>
                                            <x-input type="text" class="w-full">
                                            </x-input>      </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                General Average
                                            </label>
                                            <x-input type="number" class="w-full">
                                            </x-input>    </div>
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
                                        Grade 8
                                           </p>
                                    <div class="flex flex-wrap">

                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                    Name of School
                                                </label>
                                                <x-input type="text" class="w-full">
                                                </x-input>   </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                    School Year Attended
                                                </label>
                                                <x-input type="text" class="w-full">
                                                </x-input>      </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                    General Average
                                                </label>
                                                <x-input type="number" class="w-full">
                                                </x-input>    </div>
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
                                            Grade 9
                                               </p>
                                        <div class="flex flex-wrap">

                                            <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        Name of School
                                                    </label>
                                                    <x-input type="text" class="w-full">
                                                    </x-input>   </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        School Year Attended
                                                    </label>
                                                    <x-input type="text" class="w-full">
                                                    </x-input>      </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        General Average
                                                    </label>
                                                    <x-input type="number" class="w-full">
                                                    </x-input>    </div>
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
                                                Grade 10
                                                   </p>
                                            <div class="flex flex-wrap">

                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                            Name of School
                                                        </label>
                                                        <x-input type="text" class="w-full">
                                                        </x-input>   </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                            School Year Attended
                                                        </label>
                                                        <x-input type="text" class="w-full">
                                                        </x-input>      </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                            General Average
                                                        </label>
                                                        <x-input type="number" class="w-full">
                                                        </x-input>    </div>
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
                                            Grade 11
                                               </p>
                                        <div class="flex flex-wrap">

                                            <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        Name of School
                                                    </label>
                                                    <x-input type="text" class="w-full">
                                                    </x-input>   </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        School Year Attended
                                                    </label>
                                                    <x-input type="text" class="w-full">
                                                    </x-input>      </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        General Average
                                                    </label>
                                                    <x-input type="number" class="w-full">
                                                    </x-input>    </div>
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
                                            Grade 12
                                               </p>
                                        <div class="flex flex-wrap">

                                            <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        Name of School
                                                    </label>
                                                    <x-input type="text" class="w-full">
                                                    </x-input>   </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        School Year Attended
                                                    </label>
                                                    <x-input type="text" class="w-full">
                                                    </x-input>      </div>
                                            </div>
                                            <div class="w-full lg:w-4/12 px-4">
                                                <div class="relative w-full mb-3">
                                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                        General Average
                                                    </label>
                                                    <x-input type="number" class="w-full">
                                                    </x-input>    </div>
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

                </form>
            </div>
        </div>
    </div>
</section>



<section class="p-6 mx-auto bg-blueGray-50">
    <div class="w-full mx-auto mt-2">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-white mb-0 px-6 py-6 ">


                <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                   Additional Information
                       </p>
                       <div class="flex flex-wrap">
                           <div class="w-full lg:w-4/12 px-4">
                               <div class="relative w-full mb-3">
                                   <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Height
                                   </label>
                                   <x-input type="text" class="w-full">
                                   </x-input>
                               </div>
                           </div>
                           <div class="w-full lg:w-4/12 px-4">
                               <div class="relative w-full mb-3">
                                   <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                           Weight
                                   </label>
                                   <x-input type="text" class="w-full">
                                   </x-input>  </div>
                           </div>
                           <div class="w-full lg:w-4/12 px-4">
                               <div class="relative w-full mb-3">
                                   <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                   BMI
                                   </label>
                                   <x-input type="text" class="w-full">
                                   </x-input>  </div>
                           </div>
                       </div>



                       <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                        Do you have a dissability?

                           </p>
                           <div class="flex flex-wrap">
                               <div class="w-full lg:w-4/12 px-4">
                                <div class="flex">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox" class="font-medium text-gray-900 ">Yes</label>

                                    </div>
                                </div>
                               </div>

                               <div class="w-full lg:w-4/12 px-4">
                                <div class="flex">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                            type="checkbox" value=""
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox" class="font-medium text-gray-900 ">No</label>

                                    </div>
                                </div>
                               </div>

                               <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                    If Yes, What it is?
                                    </label>
                                    <x-input type="text" class="w-full">
                                    </x-input>  </div>
                            </div>


                           </div>




                           <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                            Food Allergy

                               </p>
                               <div class="flex flex-wrap">
                                   <div class="w-full lg:w-4/12 px-4">
                                    <div class="flex">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-checkbox" class="font-medium text-gray-900 ">Yes</label>

                                        </div>
                                    </div>
                                   </div>

                                   <div class="w-full lg:w-4/12 px-4">
                                    <div class="flex">
                                        <div class="flex items-center h-5">
                                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                        <div class="ml-2 text-sm">
                                            <label for="helper-checkbox" class="font-medium text-gray-900 ">No</label>

                                        </div>
                                    </div>
                                   </div>

                                   <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        If Yes, What it is?
                                        </label>
                                        <x-input type="text" class="w-full">
                                        </x-input>  </div>
                                </div>


                               </div>





                           <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                           Medicine taken in

                               </p>
                               <div class="flex flex-wrap">
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                       1.
                                        </label>
                                        <x-input type="text" class="w-full">
                                        </x-input>  </div>
                                </div>

                                   <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                       2.
                                        </label>
                                        <x-input type="text" class="w-full">
                                        </x-input>  </div>
                                </div>

                                   <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                       3.
                                        </label>
                                        <x-input type="text" class="w-full">
                                        </x-input>  </div>
                                </div>


                               </div>



                               <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                                Vitamins taken in

                                    </p>
                                    <div class="flex flex-wrap">
                                     <div class="w-full lg:w-4/12 px-4">
                                         <div class="relative w-full mb-3">
                                             <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            1.
                                             </label>
                                             <x-input type="text" class="w-full">
                                             </x-input>  </div>
                                     </div>

                                        <div class="w-full lg:w-4/12 px-4">
                                         <div class="relative w-full mb-3">
                                             <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            2.
                                             </label>
                                             <x-input type="text" class="w-full">
                                             </x-input>  </div>
                                     </div>

                                        <div class="w-full lg:w-4/12 px-4">
                                         <div class="relative w-full mb-3">
                                             <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            3.
                                             </label>
                                             <x-input type="text" class="w-full">
                                             </x-input>  </div>
                                     </div>
                                    </div>



                                    <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                                        Accidents Experience

                                            </p>
                                            <div class="flex flex-wrap">
                                             <div class="w-full lg:w-1/2 px-4">
                                                 <div class="relative w-full mb-3">
                                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                    1.
                                                     </label>
                                                     <x-input type="text" class="w-full">
                                                     </x-input>  </div>
                                             </div>

                                                <div class="w-full lg:w-1/2 px-4">
                                                 <div class="relative w-full mb-3">
                                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                    2.
                                                     </label>
                                                     <x-input type="text" class="w-full">
                                                     </x-input>  </div>
                                             </div>


                                            </div>




                                            <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                                                Operations Experience

                                                    </p>
                                                    <div class="flex flex-wrap">
                                                     <div class="w-full lg:w-1/2 px-4">
                                                         <div class="relative w-full mb-3">
                                                             <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                            1.
                                                             </label>
                                                             <x-input type="text" class="w-full">
                                                             </x-input>  </div>
                                                     </div>

                                                        <div class="w-full lg:w-1/2 px-4">
                                                         <div class="relative w-full mb-3">
                                                             <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                                            2.
                                                             </label>
                                                             <x-input type="text" class="w-full">
                                                             </x-input>  </div>
                                                     </div>


                                                    </div>

            </div>
        </div>
    </div>
</section>





<section class="p-6 mx-auto bg-blueGray-50">
    <div class="w-full mx-auto mt-2">
        <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-white mb-0 px-6 py-6 ">


                <p class="text-xs text-blueGray-400  mt-2 mb-2 px-4 font-bold uppercase">
                  Name some of your Academic and Extra-Curricular Awards
                       </p>
                       <div class="flex flex-wrap">
                           <div class="w-full lg:w-1/2 px-4">
                               <div class="relative w-full mb-3">
                                   <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Name of Award
                                   </label>
                                   <x-input type="text" class="w-full">
                                   </x-input>
                               </div>
                           </div>
                           <div class="w-full lg:w-1/2 px-4">
                               <div class="relative w-full mb-3">
                                   <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                           Year Achieved
                                   </label>
                                   <x-input type="text" class="w-full">
                                   </x-input>  </div>
                           </div>

                       </div>





                         <div class="flex flex-wrap">
                             <div class="w-full lg:w-1/2 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Name of Award
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>
                                 </div>
                             </div>
                             <div class="w-full lg:w-1/2 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Year Achieved
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>  </div>
                             </div>

                         </div>





                         <div class="flex flex-wrap">
                             <div class="w-full lg:w-1/2 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Name of Award
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>
                                 </div>
                             </div>
                             <div class="w-full lg:w-1/2 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             Year Achieved
                                     </label>
                                     <x-input type="text" class="w-full">
                                     </x-input>  </div>
                             </div>

                         </div>





                                 <div class="flex flex-wrap">
                                     <div class="w-full lg:w-4/12 px-4">
                                         <div class="relative w-full mb-3">
                                             <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                               What is your favorite subject/s:
                                             </label>
                                             <x-input type="text" class="w-full">
                                             </x-input>
                                         </div>
                                     </div>
                                     <div class="w-full lg:w-4/12 px-4">
                                         <div class="relative w-full mb-3">
                                             <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             What subject do you find difficult
                                             </label>
                                             <x-input type="text" class="w-full">
                                             </x-input>  </div>
                                     </div>
                                     <div class="w-full lg:w-4/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                             What school organizations are you afiliated?
                                            </label>
                                            <x-input type="text" class="w-full">
                                            </x-input>  </div>
                                    </div>

                                 </div>



                                 <p class="text-xs text-blueGray-400  mt-4 mb-2 px-4 font-bold uppercase">
                                    What do you plan to do after graduating Senior High School?

                                       </p>
                                       <div class="flex flex-wrap">
                                           <div class="w-full lg:w-4/12 px-4">
                                            <div class="flex">
                                                <div class="flex items-center h-5">
                                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                        type="checkbox" value=""
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <label for="helper-checkbox" class="font-medium text-gray-900 ">Go to College</label>

                                                </div>
                                            </div>
                                           </div>

                                           <div class="w-full lg:w-4/12 px-4">
                                            <div class="flex">
                                                <div class="flex items-center h-5">
                                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                        type="checkbox" value=""
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <label for="helper-checkbox" class="font-medium text-gray-900 ">Work as a skilled worker</label>

                                                </div>
                                            </div>
                                           </div>
                                           <div class="w-full lg:w-4/12 px-4">
                                            <div class="flex">
                                                <div class="flex items-center h-5">
                                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                        type="checkbox" value=""
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <label for="helper-checkbox" class="font-medium text-gray-900 ">Pursue TESDA certificates</label>

                                                </div>
                                            </div>
                                           </div>



                                           <div class="w-full lg:w-4/12 px-4">
                                            <div class="flex">
                                                <div class="flex items-center h-5">
                                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                        type="checkbox" value=""
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <label for="helper-checkbox" class="font-medium text-gray-900 ">Engage in Business</label>

                                                </div>
                                            </div>
                                           </div>



                                           <div class="w-full lg:w-4/12 px-4">
                                            <div class="flex">
                                                <div class="flex items-center h-5">
                                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                        type="checkbox" value=""
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <label for="helper-checkbox" class="font-medium text-gray-900 ">Work to help parents</label>

                                                </div>
                                            </div>
                                           </div>



                                           <div class="w-full lg:w-4/12 px-4">
                                            <div class="flex">
                                                <div class="flex items-center h-5">
                                                    <input id="helper-checkbox" aria-describedby="helper-checkbox-text"
                                                        type="checkbox" value=""
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                </div>
                                                <div class="ml-2 text-sm">
                                                    <label for="helper-checkbox" class="font-medium text-gray-900 ">Undecided</label>

                                                </div>
                                            </div>
                                           </div>



                                       </div>















            </div>
        </div>
    </div>
</section>













        @endsection
