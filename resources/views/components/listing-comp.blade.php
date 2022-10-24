@props(['list'])
<x-card>
    <div class="flex">
       <img class="hidden w-48 mr-6 md:block"
        src="{{$list->logo ? asset('storage/' . $list->logo) : asset('/images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/lists/{{$list->id}}">{{$list->title}}</a>
            </h3>
            
            <div class="text-xl font-bold mb-4">{{$list->company}}</div>
            <x-listing-tags :tagsCsv="$list->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$list->location}}
            </div>
            <a href="/lists/{{$list->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
              </a>
              <form method="POST" action="/lists/{{$list->id}}">
          @csrf
          @method('DELETE')
          <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
        </form>
        </div>
    </div>
</x-card>