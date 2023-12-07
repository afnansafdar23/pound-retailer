<div class='text-start'>
    @can('sub.category.edit')
    <a href="{{ route('sub.category.edit',$id) }}" class="btn btn-icon btn-success btn-sm mr-2"><i
            class="bi bi-pencil fs-4"></i></a>
    @endcan

    @can('sub.category.delete')
    <a href="{{ route('sub.category.delete',$id) }}" class="btn btn-icon btn-danger btn-sm"><i
            class="bi bi-trash fs-4"></i></a>
    @endcan
</div>