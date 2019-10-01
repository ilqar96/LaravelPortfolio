<li class="comment">
    <div class="vcard bio">
        <img src="images/person_1.jpg" alt="Image">
    </div>
    <div class="comment-body">
        <h3>Jean Doe</h3>
        <div class="meta">July 27, 2018 at 2:21pm</div>
        <p>{{ $comment->content }}</p>
        <p><a href="#" class="reply">Reply</a></p>
    </div>

@if ($child_comment->comments)
    <ul class="children">
        @foreach ($child_comment->comments as $childComment)
            @include('frontend.partials.comment.child_comment', ['child_comment' => $childComment])
        @endforeach
    </ul>
@endif
</li>
