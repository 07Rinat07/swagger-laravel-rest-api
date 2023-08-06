<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

/**
 *
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание",
 *     tags={"Post"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="Some title"),
 *                      @OA\Property(property="likes", type="integer", example=20),
 *                  )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response="200",
 *         description="Ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="likes", type="integer", example=20),
 *             ),
 *         ),
 *     ),
 * ),
 *
 *
 * @OA\Get(
 *      path="/api/posts",
 *      summary="Список",
 *      tags={"Post"},
 *
 *      @OA\Response(
 *          response="200",
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="title", type="string", example="Some title"),
 *                   @OA\Property(property="likes", type="integer", example=20),
 *              )),
 *         ),
 *      ),
 * ),
 *
 * @OA\Get(
 *       path="/api/posts/{post}",
 *       summary="Единичная запись",
 *       tags={"Post"},
 *       @OA\Parameter(
 *           description="ID post",
 *           in="path",
 *           name="post",
 *           required=true,
 *           example=1
 *       ),
 *       @OA\Response(
 *           response="200",
 *           description="Ok",
 *           @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Some title"),
 *                  @OA\Property(property="likes", type="integer", example=20),
 *              ),
 *          ),
 *       ),
 * ),
 *
 * @OA\Patch(
 *        path="/api/posts/{post}",
 *        summary="Update",
 *        tags={"Post"},
 *        @OA\Parameter(
 *            description="ID post",
 *            in="path",
 *            name="post",
 *            required=true,
 *            example=2
 *        ),
 *
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                   @OA\Schema(
 *                       @OA\Property(property="title", type="string", example="Some title for Edit"),
 *                       @OA\Property(property="likes", type="integer", example=44),
 *                   )
 *              }
 *          )
 *      ),
 *
 *        @OA\Response(
 *            response="200",
 *            description="Ok",
 *            @OA\JsonContent(
 *               @OA\Property(property="data", type="object",
 *                   @OA\Property(property="id", type="integer", example=2),
 *                   @OA\Property(property="title", type="string", example="Some title"),
 *                   @OA\Property(property="likes", type="integer", example=20),
 *               ),
 *           ),
 *        ),
 *  ),
 *

 */

class PostController extends Controller
{

}
