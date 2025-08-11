@extends('templates.template')

@section('main')
<div class="col-xl-12">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="form-label">Anexar lista de clientes</label>
                        <input class="form-control" name="excel_file" type="file" id="formFile" accept=".csv">
                        <button type="submit">Importar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection