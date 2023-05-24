<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFakultasRequest;
use App\Http\Requests\UpdateFakultasRequest;
use App\Http\Resources\Admin\FakultasResource;
use App\Models\Fakultas;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FakultasApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('fakultas_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FakultasResource(Fakultas::all());
    }

    public function store(StoreFakultasRequest $request)
    {
        $fakultas = Fakultas::create($request->all());

        return (new FakultasResource($fakultas))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Fakultas $fakultas)
    {
        abort_if(Gate::denies('fakultas_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FakultasResource($fakultas);
    }

    public function update(UpdateFakultasRequest $request, Fakultas $fakultas)
    {
        $fakultas->update($request->all());

        return (new FakultasResource($fakultas))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Fakultas $fakultas)
    {
        abort_if(Gate::denies('fakultas_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fakultas->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
