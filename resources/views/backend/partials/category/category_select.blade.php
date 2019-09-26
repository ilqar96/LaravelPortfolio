<label for="post-category">{{__('post.category')}}</label>
<select name="category"  class="form-control" id="post-category">
    @foreach($categories as $category)
        <option value="{{$category->id}}" >{{$category->name}}</option>
    @endforeach
</select>
