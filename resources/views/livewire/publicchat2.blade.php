

<x-app-layout>




{{--($userName = request()->cookie('user_name'))
  (dd($username))--}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                
              <div class="flex items-center">
                <div class="w-3/5"> content... </div>
                <div class="w-1/5">
                
                <div>
            <ul class="ml-12 space-y-4">
                @if (isset($msg))
                @foreach ($this->msg as $message)
                    <li>
                        <span class="block font-bold dark:text-green-700">{{ $message }}</span>
                        <span
                            class="block dark:text-white"
                            x-bind:class='{ "text-5xl": hasOneEmoji("{{ $message->message }}") }'
                        >
                            {!! $message->message !!}
                        </span>
                    </li>
                @endforeach
                @endif
            </ul>
        </div>
                               
                             

                  
                                   
                  <x-dropdown align="right" class="h-screen" >
                          
                            <x-slot name="content" >

                            
                                <div class="w-screen items-start" >
                                <form
                                class="mt-4 mb-8 ml-12 space-x-2"
                wire:submit.prevent="cookieValue"
            >
            <label for="message">
                    <input
                        autofocus
                        class="dark:text-white dark:bg-gray-800"
                        id="message"
                        name="message"
                        type="text"
                        wire:model="message"
                        x-ref="message"
                    >
                </label>

                                <button     class="py-2 px-3 text-white bg-blue-500 rounded-lg dark:text-white dark:bg-blue-900 hover:bg-blue-600" type="submit">
                                   Send Message
                                </button>
                            </form>       
                                

                                </div>
                            </x-slot>   
                            
                            
                            <x-slot name="trigger" class=" items-end justify">

                            <div class="h-screen">

                                <button class="size-16">
                                   <img src="{{ asset('img/chat-icon.png') }}" />
                                </button>
                            </div>   
                            </x-slot>   
                  </x-dropdown>
                        
                         
            
        </div>
    </div>
            
            </div>
        </div>
    </div>
</x-app-layout>






