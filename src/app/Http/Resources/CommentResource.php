<?php

namespace App\Http\Resources;

use App\Entities\Comment\CommentListEntity;
use App\Models\Comment;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var CommentListEntity $this */
        $commentList = $this->commentList;

        return collect($commentList)->map(static function (Comment $comment) {
            return [
                'text' => $comment->text,
            ];
        })->toArray();
    }
}
