<label for="post-user">{{__('post.user')}}</label>
<select name="user"  class="form-control" id="post-user">
    @foreach($users as $user)
        <option value="{{$user->id}}"
            @if(isset($post))
                {{$post->user->id == $user->id ? 'selected':''}}
            @endif
        >{{$user->name}}</option>
    @endforeach
</select>
