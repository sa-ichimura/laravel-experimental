<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentListRequest;
use App\Http\Resources\CommentResource;
use App\UseCases\Comment\CommentListAction;

class CommentController extends Controller
{
    public const DEFAUT_LIMIT = 10;

    public function list(
        CommentListRequest $request,
        CommentListAction $commentListAction
    ): CommentResource {
        /** @var array<string, string> $valiated */
        $valiated = $request->validated();
        $valiatedCollect = collect($valiated);
        $limit = $valiatedCollect->has('limit') ? (int) $valiatedCollect->get('limit') : self::DEFAUT_LIMIT;

        return new CommentResource($commentListAction($limit));
    }
}
