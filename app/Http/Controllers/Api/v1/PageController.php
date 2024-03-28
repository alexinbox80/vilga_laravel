<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\IndexRequest;
use App\Http\Resources\Page\PageResource;
use App\Services\Page\PageService;
use App\Services\Response\ResponseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @OA\Get(
     *      path="/api/v1/page/{lang}",
     *      operationId="page.index",
     *      tags={"Страница"},
     *      summary="Получение страницы",
     *      description="Получение страницы",
     *
     *      @OA\Parameter(
     *            name="lang",
     *            description="язык страницы",
     *            required=true,
     *            in="path",
     *            @OA\Schema(
     *                type="string",
     *                example="ru"
     *            ),
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *          )
     *      )
     * )
     *
     * @param ResponseService $responseService
     * @param PageService $pageService
     * @return JsonResponse
     */
    public function index(
        ResponseService $responseService,
        PageService $pageService,
        IndexRequest $request
    ): JsonResponse
    {
        $validated = $request->validated();
        $pages = $pageService->index($validated['language']);

        return $responseService->success([
            PageResource::make($pages['data'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
