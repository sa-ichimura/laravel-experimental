<?php

namespace App\Repositories;

use App\Entities\Comment\CommentListEntity;
use App\Models\Comment;
use App\Repositories\Interface\CommentRepository;

class CommentRepositoryImpl implements CommentRepository
{
    public function __construct(
        public Comment $commentModel
    ) {
        $this->commentModel = $commentModel;
    }

    public function findAll(int $limit = 10): CommentListEntity
    {
        $commentListEntity = CommentListEntity::make();
        $coments = $this->commentModel->limit($limit)->get();
        $coments->each(static function (Comment $comment) use ($commentListEntity) {
            $commentListEntity->add($comment);
        });

        return $commentListEntity;
    }
}
