<?php

namespace App\Repositories\Interface;

use App\Entities\Comment\CommentListEntity;

interface CommentRepository
{
    public function findAll(int $limit): CommentListEntity;
}
