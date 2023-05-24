@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.fakultas.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.fakultass.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.fakultas.fields.kode_fakultas') }}
                        </th>
                        <td>
                            {{ $fakultas->kode_fakultas }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.fakultas.fields.fakultas') }}
                        </th>
                        <td>
                            {{ $fakultas->fakultas }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.fakultas.fields.program_studi') }}
                        </th>
                        <td>
                            {{ $fakultas->program_studi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.fakultas.fields.mata_kuliah') }}
                        </th>
                        <td>
                            {{ $fakultas->mata_kuliah }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.fakultass.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection