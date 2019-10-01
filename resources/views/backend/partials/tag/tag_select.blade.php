<label for="post-tag">{{__('post.tag')}}</label>
<select class="form-control" id="post-tag" name="tags[]" multiple="multiple">
    @foreach($tags as $tag)
        <option
            @if(isset($post))
            {{ in_array($tag->id,$tagIdArray) ? 'selected':''}}
            @endif

            value="{{$tag->name}}">{{$tag->name}}
        </option>
    @endforeach
</select>
