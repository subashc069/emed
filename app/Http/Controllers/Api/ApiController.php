<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    public function respondWithOk($data)
    {
        return response($data, Response::HTTP_OK);
    }

    public function okResponse($data)
    {
        return response()->json($data, Response::HTTP_OK);
    }
    /**
     * Get the token array structure.
     *
     * @param  array $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithData($data)
    {
        return response()->json($data, Response::HTTP_CREATED);
    }

    protected function badRequestResponse($data)
    {
        return response()->json($data, Response::HTTP_BAD_REQUEST);
    }

    protected function unauthorizedResponse($data)
    {
        return response()->json($data, Response::HTTP_UNAUTHORIZED);
    }

    protected function nonFoundResponse($data)
    {
        return response()->json($data, Response::HTTP_NOT_FOUND);
    }

    protected function internalServerErrorResponse($data)
    {
        return response()->json($data, Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    protected function forbiddenResponse($data)
    {
        return response()->json($data, Response::HTTP_FORBIDDEN);
    }

    protected function validationErrorResponse($data)
    {
        return response()->json($data, Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
