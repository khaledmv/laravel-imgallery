@extends('app')

@section('content')

<div class="bg-white">
  <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

    <div class="flex justify-around items-center">
      <h2 class="text-2xl font-bold tracking-tight text-center text-gray-900">All User</h2>
      <a href="{{route('user.create')}}" class="text-2xl font-bold tracking-tight text-center text-green-500"> Add User</a>
    </div>

    @if (session('message'))
        <h2 class="text-green-500"> {{ session('message')}}</h2>
    @endif

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

      @foreach ($users as $user)
        <div>
          <div class="group relative">
            <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
              <img src="{{ asset('uploads/image/' .$user->image)  }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{$user->name}}
                    {{$user->id}}
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{$user->title}}</p>
              </div>
          
            </div>
          </div>
          <div class="flex flex-col ">
            <a href="{{ route('user.edit',$user->id )}}" class="text-sm text-green-500 "> Edit</a>
            <a href="{{ route('user.delete',$user->id )}}" class="text-sm text-red-500 "> Delete</a>
          </div>
        </div>
      @endforeach

  </div>
</div>
@endsection
