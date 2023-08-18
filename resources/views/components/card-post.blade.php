@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
<div class="relative pb-2 overflow-hidden">
@if ($post->image)
<img class="w-full h-full object-cover object-center" src="{{Storage::url($post->image->url)}}" alt=""> 
@else
<img class="w-full h-full object-cover object-center" src="https://cdn.pixabay.com/photo/2015/08/27/09/22/banner-909710__340.jpg" alt="">  
@endif
</div>

    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
           <a href="{{route('posts.show', $post)}}">
            {{$post->name}}
               </a> 
        </h1>
        <div class="text-gray-700 text-base text-justify">
            {!!$post->extract!!}
        </div>
    </div>
    <div class="px-4 pt-4 pb-2">
        @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag',$tag)}}"
            class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full"> 
                         {{$tag->name}}
                        </a>
            
        @endforeach
    </div>
</article>


