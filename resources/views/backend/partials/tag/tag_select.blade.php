<label for="post-tag">{{__('post.tag')}}</label>
<select class="form-control" id="post-tag" name="tags[]" multiple="multiple">
    @foreach($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
    @endforeach
</select>
