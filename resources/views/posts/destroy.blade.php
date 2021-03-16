<form action="{{ route('posts.destroy', $post->id)}}" method="post">
   @method('DELETE')
   @csrf
   <input class="btn btn-danger" type="submit" value="Delete" />
</form>