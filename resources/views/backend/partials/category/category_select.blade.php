<label for="post-category">{{__('post.category')}}</label>
<select name="category"  class="form-control" id="post-category">
    @foreach($categories as $category)
        <option value="{{$category->id}}"
        @if(isset($post))
            {{$post->category->id == $category->id ? 'selected':''}}
        @endif
            >{{$category->name}}</option>
    @endforeach
</select>
