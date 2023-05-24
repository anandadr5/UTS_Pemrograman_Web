@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.fakultas.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.fakultass.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="kode_fakultas">{{ trans('cruds.fakultas.fields.kode_fakultas') }}</label>
                <input class="form-control {{ $errors->has('kode_fakultas') ? 'is-invalid' : '' }}" type="text" name="kode_fakultas" id="kode_fakultas" value="{{ old('kode_fakultas', '') }}" required>
                @if($errors->has('kode_fakultas'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kode_fakultas') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.fakultas.fields.fakultas_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fakultas">{{ trans('cruds.fakultas.fields.fakultas') }}</label>
                <input class="form-control {{ $errors->has('fakultas') ? 'is-invalid' : '' }}" type="text" name="fakultas" id="fakultas" value="{{ old('fakultas', '') }}" required>
                @if($errors->has('fakultas'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fakultas') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.fakultas.fields.fakultas_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="program_studi">{{ trans('cruds.fakultas.fields.program_studi') }}</label>
                <input class="form-control {{ $errors->has('program_studi') ? 'is-invalid' : '' }}" type="text" name="program_studi" id="program_studi" value="{{ old('program_studi', '') }}" required>
                @if($errors->has('program_studi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('program_studi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.fakultas.fields.program_studi_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="mata_kuliah">{{ trans('cruds.fakultas.fields.mata_kuliah') }}</label>
                <input class="form-control {{ $errors->has('mata_kuliah') ? 'is-invalid' : '' }}" type="text" name="mata_kuliah" id="mata_kuliah" value="{{ old('mata_kuliah', '') }}" required>
                @if($errors->has('mata_kuliah'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mata_kuliah') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.fakultas.fields.mata_kuliah_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection