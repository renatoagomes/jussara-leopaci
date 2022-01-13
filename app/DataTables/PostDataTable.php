<?php

namespace App\DataTables;

use App\Models\Post;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class PostDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  mixed  $query  Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', function ($model) {
            return view('posts.datatables_actions')->with(['post' => $model, 'id' => $model->id]);
        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\Post  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Post $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '200px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'buttons' => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner', 'text' => '<i class="fa fa-plus"></i> Adicionar'],
                ],
                'language' => [
                    'url' => url('//cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json'),
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'titulo',
            ['title' => 'Status', 'data' => 'textoStatus', 'orderable' => false, 'filterable' => false, 'searchable' => false],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'postsdatatable_'.time();
    }
}
