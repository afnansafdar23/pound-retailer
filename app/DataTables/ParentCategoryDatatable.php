<?php

namespace App\DataTables;

use App\Models\ParentCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;


class ParentCategoryDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'admin.parent-category.datatables_actions')
            ->addColumn('image', function (ParentCategory $parentCategory) {
                return '<img src="' . asset($parentCategory->getFirstMediaUrl('parentCategory.image')) . '" class="image-input-wrapper rounded-circle w-50px h-50px" alt="alt text">';
            })
            ->rawColumns(['image', 'edit', 'delete', 'action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ParentCategory $model): QueryBuilder
    {
        return $model->newQuery()->select('id', 'name', 'sub_name');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('parent-category-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->parameters(
                config('datatables-buttons.parameters')
            );;
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        $columns = [
            Column::make('id'),
            Column::make('image'),
            Column::make('name'),
            Column::make('sub_name')->title('Sub Name'),
        ];

        if (Auth::user()->can('parent.category.edit') || Auth::user()->can('parent.category.delete')) {
            $columns = array_merge($columns, [Column::make('action')]);
        }

        return $columns;
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'ParentCategory_' . date('YmdHis');
    }
}
