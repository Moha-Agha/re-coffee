@extends('layouts.app')

@section('content')

  @if(Session::has('remove'))
    <div id="flashMessage" class="bg-red-lightest border border-red-light text-red-dark px-4 py-3 rounded relative" role="alert">
      <span class="block sm:inline">{{ Session::get('remove') }}</span>
      <span class="absolute pin-t pin-b pin-r px-4 py-3">
    </span>
    </div>
    <script type="text/javascript">
      var element = document.getElementById("flashMessage");
      setTimeout("element.outerHTML = \"\";", 1500);
      // delete element;
    </script>
  @endif

  @if(Session::has('add'))
    <div id="flashMessage" class="bg-blue-lightest border border-blue-light text-blue-dark px-4 py-3 rounded relative" role="alert">
      <span class="block sm:inline">{{ Session::get('add') }}</span>
      <span class="absolute pin-t pin-b pin-r px-4 py-3">
    </span>
    </div>
    <script type="text/javascript">
      var element = document.getElementById("flashMessage");
      setTimeout("element.outerHTML = \"\";", 1500);
      // delete element;
    </script>
  @endif

  <div class="flex mb-4">
    <div class="w-1/3 "></div>

    <div class="w-2/3 ">

      <div class="w-full max-w-xs mt-9">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/coffee" method="post">
          {{--<div class="mb-4">--}}
            {{--<label class="block text-grey-darker text-sm font-bold mb-2" for="username">--}}
              {{--Drinker Id--}}
            {{--</label>--}}
            {{--<input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"  type="text" name="drinker_id" >--}}
          {{--</div>--}}
          <div class="inline-block relative w-64">
            <select class=" bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 mb-4 rounded shadow" name="drinker_id">
              @foreach ($drinkers as $drinker)
              <option value="{{ $drinker->id }}">{{ $drinker->name }}</option>
              @endforeach
            </select>
            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
            </div>
          </div>

          <div class="inline-block relative w-64">
            <select class=" bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 mb-4 rounded shadow" name="size">
              <option value="single">single</option>
              <option value="double">double</option>
            </select>
            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
            </div>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-yellow-dark hover:bg-yellow-darker text-white font-bold py-2 px-4 rounded" type="submit" value="Submit">
              creat coffee
            </button>

          </div>
        </form>

      </div>

    </div>


  </div>
<div class="container mx-auto ">
  <div class="flex mb-4">

      <section class="bg-white py-8 w-full rounded-lg">
        <div class="container mx-auto px-8">
          <div class="table w-full">

            <table class="text-left w-full my-table">
              <thead class="bg-grey-light text-black flex items-center w-full rounded-lg">

              <tr class="flex items-center  w-full  ">
                <th class="flex-1 p-4 w-1/4">ID</th>
                <th class="flex-1 p-4 w-1/4">Size</th>
                <th class="flex-1 p-4 w-1/4">Drinker</th>
                <th class="flex-1 p-4 w-1/4">Delete</th>
              </tr>
              </thead>
              <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
              <tbody class=" flex flex-col items-center w-full " >

              @foreach ($coffees as $coffee)
                <tr class=" border-b border-gree flex items-center w-full  ">
                  <td class="flex-1 p-4 w-1/4">{{ $coffee->id }}</td>
                  <td class="flex-1 p-4 w-1/4">{{ $coffee->size }}</td>
                  <td class="flex-1 p-4 w-1/4">{{ $coffee->drinker->name }}</td>
                  <td class="flex-1 p-4 w-1/4 ">
                    <form action="/coffee/{{ $coffee->id }}" method="POST">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE">
                      {{--<input type="hidden" name="coffee_id" value="{{ $coffee->id }}">--}}
                      <button class="bg-red-dark hover:bg-red text-white font-bold py-2 px-4 rounded w-full" type="submit" value="Submit">
                        Delete
                      </button>
                    </form>
                  </td>
                </tr>

              @endforeach



              </tbody>
            </table>

          </div>
        </div>
      </section>


  </div>
</div>

@endsection
