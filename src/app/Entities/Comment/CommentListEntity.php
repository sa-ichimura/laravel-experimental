<?php

namespace App\Entities\Comment;

use App\Models\Comment;

/**
 * @implements \IteratorAggregate<Comment>
 */
class CommentListEntity implements \IteratorAggregate
{
    /**
     * @param \ArrayObject<int, Comment> $commentList
     */
    private function __construct(
        public \ArrayObject $commentList
    ) {
        $this->commentList = new \ArrayObject();
    }

    public function add(Comment $comment): void
    {
        $this->commentList[] = $comment;
    }

    /**
     * @return \ArrayIterator<int , Comment>
     */
    public function getIterator(): \ArrayIterator
    {
        return $this->commentList->getIterator();
    }

    public static function make(): CommentListEntity
    {
        return new CommentListEntity(new \ArrayObject());
    }
}
