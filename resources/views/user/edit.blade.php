@extends('app')

@section('content')
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div>
      
      <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Add User</h2>
     
    </div>
    <form class="mt-8 space-y-6" action="{{route('user.update', $user->id )}}" method="POST" enctype="multipart/form-data">
      
      @method('PUT')
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="-space-y-px rounded-md shadow-sm">
        <div>
          <label for="email-address" class="sr-only">Name</label>
          <input id="email-address" name="name" type="text" value="{{$user->name}}" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Name">
        </div>
        <div>
          <label for="password" class="sr-only">Title</label>
          <input id="password" name="title" type="text" value="{{ $user->title}}" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Title  ">
        </div>

      
        <br>
        <div>
          <label for="image">Image Upoad</label>
          <input type="file" name="image" id="image">
        </div>
        <br>
        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
          <img src="{{ asset('uploads/image/' .$user->image)  }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
      </div>

    

      <div>
        <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        Update User
        </button>
      </div>
    </form>
  </div>
</div>
@endsection