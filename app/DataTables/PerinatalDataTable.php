<?php

namespace App\DataTables;

use App\Models\Perinatal;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class PerinatalDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'perinatals.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\Perinatal  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Perinatal $model)
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
            ->addAction(['width' => '120px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'buttons' => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner'],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner'],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner'],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner'],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner'],
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
            'referencias_json',
            'cor_secao_1',
            'titulo_secao_1',
            'subtitulo_secao_1',
            'conteudo_secao_1',
            'cor_secao_2',
            'titulo_secao_2',
            'subtitulo_secao_2',
            'conteudo_secao_2',
            'cor_secao_3',
            'titulo_secao_3',
            'subtitulo_secao_3',
            'conteudo_secao_3',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'perinatalsdatatable_'.time();
    }
}
