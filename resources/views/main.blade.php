<script>
    $collection = collect(['aaaaaaaaaa'])
    </script>
    @extends('layouts.navbar')
    
    @section('title', 'Home Page')
    
    @section('content')
    <div class="flex flex-col items-center">
        <div class="flex justify-center m-3">
            <form class="flex flex-row gap-3">
                <div class="flex">
                    <input type="text" placeholder="Search for the tool you like"
                        class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-gray-700 focus:outline-none focus:border-grey-700"
                        >
                    <button type="submit" class="h-10 bg-gray-700 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
                </div>
                <select id="pricingType" name="pricingType"
                class="w-full h-10 border-2 border-sky-500 focus:outline-none focus:border-sky-500 text-sky-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
                    <option value="All" selected="">1</option>
                    <option value="Freemium">2</option>
                    <option value="Free">3</option>
                    <option value="Paid">4</option>
                </select>
            </form>
        </div>
        <div class="col-auto">
             @if (collect()->isEmpty())
                <div class="text-3xl font-bold w-full text-gray-700 bg-gray-500">No data found</div>
            @else
                @foreach (collect() as $item)
                    <div class="text-3xl font-bold text-gray-700">{{ $item->name }}</div>
                @endforeach
            @endif
        </div>
    </div>
    @endsection
    