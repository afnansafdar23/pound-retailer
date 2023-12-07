<div class='text-start'>
    @can('brand.edit')
    <a href="{{ route('brand.edit',$id) }}" class="btn btn-icon btn-success btn-sm mr-2"><i
            class="bi bi-pencil fs-4"></i></a>
    @endcan

    @can('brand.delete')
    <a href="{{ route('brand.delete',$id) }}" class="btn btn-icon btn-danger btn-sm"><i
            class="bi bi-trash fs-4"></i></a>
    @endcan
</div>
