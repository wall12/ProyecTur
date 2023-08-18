<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
       
        @foreach ($posts as $pots)
       <!-- -->
       

            <article href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden  @if($loop->first) @endif">
            <!-- aqui se soluciono problema de sobreposicion del dropbox -->
            <div class=" pb-2 overflow-hidden"> 
                @if ($pots->image)
                <img class="w-full h-full object-cover object-center" src="{{Storage::url($pots->image->url)}}" alt=""> 
                @else
                <img class="w-full h-full object-cover object-center" src="https://cdn.pixabay.com/photo/2015/08/27/09/22/banner-909710__340.jpg" alt="">  
                @endif
            </div>

            <div class="p-2">
                @foreach ($pots->tags as $tag)
              <a href="{{route('posts.tag',$tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full"> {{$tag->name}}</a>
              @endforeach
              <h2  class="font-bold text-xl mb-2 ">
                <a href="{{route('posts.show',$pots)}}">
                    {{$pots->name}}
                </a>
                </h2>
              <div class="text-gray-700 text-base text-justify">
                {!!$pots->extract!!}
            </div>
            </div>
            </article>
        
                
        


          @endforeach
    <!-- --> 
    </div>
    <div class="mt-4">
        {{$posts->links()}}
    </div>
    </div>
            
</x-app-layout>