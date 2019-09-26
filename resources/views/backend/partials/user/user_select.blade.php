<label for="post-user">{{__('post.user')}}</label>
<select name="user"  class="form-control" id="post-user">
    @foreach($users as $user)
        <option value="{{$user->id}}" >{{$user->name}}</option>
    @endforeach
</select>
