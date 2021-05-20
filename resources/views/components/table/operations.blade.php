<td>
    @if($view) <a class="btn btn-primary" href="{{ route("$route.show", [$item]) }}">View</a> @endif
    @if($edit) <a class="btn btn-warning" href="{{ route("$route.edit", [$item]) }}">Edit</a> @endif
    @if($delete)
        <form class="d-inline" action="{{ route("$route.destroy", [$item]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger" />
        </form>
    @endif
</td>
