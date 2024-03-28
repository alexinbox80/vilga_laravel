<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Callback\StoreRequest;
use App\Models\Callback;
use App\Services\Callback\CallbackService;
use App\Services\Response\ResponseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @OA\Post(
     *     path="/api/v1/page/callback",
     *     tags={"callback"},
     *     description="Форма обратной связи",
     *     @OA\Parameter(
     *          name="name",
     *          description="Имя обратившегося пользователя",
     *          required=true,
     *          in="query",
     *           @OA\Schema(
     *              type="string",
     *              example="Ivan"
     *          ),
     *      ),
     *      @OA\Parameter(
     *           name="phone",
     *           description="Телефон обратившегося пользователя",
     *           required=true,
     *           in="query",
     *            @OA\Schema(
     *               type="string",
     *               example="89991234567"
     *           ),
     *       ),
     *
     *     @OA\Response(response="200",
     *          description="OK",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                 @OA\Property(
     *                    property="status",
     *                    description="status",
     *                    format="boolean",
     *                    example=true
     *                 ),
     *              ),
     *          ),
     *      ),
     * )
     *
     * @param ResponseService $responseService
     * @param CallbackService $callbackService
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function store(
        ResponseService $responseService,
        CallbackService $callbackService,
        StoreRequest $request
    ): JsonResponse
    {
        $validated = $request->validated();
        $callback = $callbackService->store($validated);

        if ($callback)
            return $responseService->success(['success']);
        else
            return $responseService->unSuccess();
    }

    /**
     * Display the specified resource.
     */
    public function show(Callback $callback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Callback $callback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Callback $callback)
    {
        //
    }
}
