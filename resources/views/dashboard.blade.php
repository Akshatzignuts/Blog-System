<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class= "button">
            <a href = "{{url('/blog')}}"><button class="btn-content" type="submit">Click for contet page</button></a>
          </div>
          <div class= "button">
            <a href = "{{url('/post/view')}}"><button class="btn-content" type="submit">Click for Post page</button></a>
          </div>
    </div>
</x-app-layout>
<style>
    .button
    {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;

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