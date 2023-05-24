@extends('../layouts.main')

@section('content')

    <div class="flex m-10">
       <div class="flex flex-col justify-center items-center">
            <div class=" w-1/3 h-auto">
                <img alt="403:Your account access is over" src="pictures/403.png" class="w-full h-full object-contain">
            </div>
            <div class="flex flex-col gap-2">
                <p class=" text-base md:text-lg lg:text-2xl text-emerald-950 font-semibold">Sorry! Your account access is over.</p>
                <p class="text-left text-sm underline underline-offset-8">Would you like to extend your access?</p>

                <button id="menu-btn" class="justify-self-start mt-4 text-sm rounded-md bg-emerald-900 text-white w-fit h-auto p-1">Extend access <i class='bx bx-chevron-down' style='color:#f2f5f0'  ></i></button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="rounded border bg-emerald-200 bg-opacity-25 w-fit h-auto p-2">
                    <ul>
                        <li>
                            <a href="#" class="p-1 text-xs hover:bg-black hover:bg-opacity-10 hover:rounded">Just 1 day</a>
                        </li>
                        <li>
                            <a href="#" class="p-1 text-xs hover:bg-black hover:bg-opacity-10 hover:rounded">Just 2 days</a>
                        </li>
                        <li>
                            <a href="#" class="p-1 text-xs hover:bg-black hover:bg-opacity-10 hover:rounded">Just 3 days</a>
                        </li>
                        <li>
                            <a href="#" class="p-1 text-xs hover:bg-black hover:bg-opacity-10 hover:rounded">Just 5 days</a>
                        </li>
                        <li>
                            <a href="#" class="p-1 text-xs hover:bg-black hover:bg-opacity-10 hover:rounded">Just 6 days</a>
                        </li>
                        <li>
                            <a href="#" class="p-1 text-xs hover:bg-black hover:bg-opacity-10 hover:rounded">Just 1 week</a>
                        </li>
                        
                    </ul>
                    
                    
                </div>
            </div> 
        
            
            </div>  
       </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () 
        =>{
            const menuBtn = document.querySelector('#menu-btn')
            const dropdown = document.querySelector('#dropdown')

            menuBtn.addEventListener('click',  () => {
                if(dropdown.classList.contains ('hidden'))
                {
                    dropdown.classList.remove('hidden');
                    dropdown.classList.add('flex');
                }
                else{
                    dropdown.classList.remove('flex');
                    dropdown.classList.add('hidden');

                }
            })


        })
       
    </script>
@endsection