<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        
        </h2>
    </x-slot>
    <!-- Logged in message section -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
   
    <!--button to go other pages--> 
    <div>
        <span class= "button">
            <a href = "{{url('/blog')}}"><button class="btn-content" type="submit">Create Blogs</button></a>
            <a href = "{{url('/post/view')}}"><button class="btn-content" type="submit">My Blogs</button></a>
            <a href = "{{url('/all/blogs')}}"><button class="btn-content" type="submit">All Blogs</button></a>
          </span>
    </div>
    
</x-app-layout>
<!-- css  -->
<style>
    .button
    {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        gap: 20px;
       

    }
    .btn-content
    {
        display:flex;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease; 
    }
</style>