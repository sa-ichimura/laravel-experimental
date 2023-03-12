<?php

namespace App\UseCases\Comment;

use App\Entities\Comment\CommentListEntity;
use App\Repositories\Interface\CommentRepository;

class CommentListAction
{
    private CommentRepository $commentRepository;

    public function __construct(
        CommentRepository $commentRepository
    ) {
        $this->commentRepository = $commentRepository;
    }

    public function __invoke(int $limit): CommentListEntity
    {
        return $this->commentRepository->findAll($limit);
    }
}
