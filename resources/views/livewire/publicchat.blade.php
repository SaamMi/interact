

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div>

                <div class="h-screen flex justify-end items-end gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                               
                             

                  <div class="flex size-12 shrink-0 items-end  rounded-full bg-[#FF2D20]/10 sm:size-16">
                                   
                  <x-dropdown align="right" width="60">
                            <x-slot name="trigger">

                                <button>
                                   <img src="{{ asset('img/chat-icon.png') }}" />
                                </button>   
                            </x-slot>   
                                
                            <x-slot name="content">
                                <div class="w-60">

                                the content

                                </div>
                            </x-slot>    
                  </x-dropdown>
                        
                        </div>
   
                            </div>


                </div>

            
            </div>
        </div>
    </div>
</x-app-layout>






<div>
    


hi
</div>
