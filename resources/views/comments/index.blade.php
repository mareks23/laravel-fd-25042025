index.blade.php file content

{{-- Question to AI: 
how to display a list of comments in laravel blade view --}}


<ul>
@foreach($comments as $comment)
    <li>{{ $comment->content }}</li>
@endforeach
</ul>