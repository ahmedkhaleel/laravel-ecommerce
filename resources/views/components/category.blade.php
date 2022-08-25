 <div >
          <a href="/categories/{{$category->slug}}" class="{{$category->depth === 0 ? 'font-bold' : ''}}"> {{ $category->title }}</a>

       @foreach($category->children as $child)
           <div class="ml-4">
               {{ $child->title }}
           </div>
       @endforeach

 </div>


