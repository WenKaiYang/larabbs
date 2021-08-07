<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\TopicReplied;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function created(Reply $reply)
    {
        // $reply->topic->increment('reply_count', 1);
        // 上面自增 1 是比较直接的做法，另一个比较严谨的做法是：创建成功后计算本话题下评论总数，然后再对其 reply_count 字段进行赋值。这样做的好处多多，一般在做 xxx_count 此类总数缓存字段时，推荐使用此方法
        $reply->topic->reply_count = $reply->topic->replies->count();
        $reply->topic->save();

        // 通知话题作者有新的评论
        $reply->topic->user->notify(new TopicReplied($reply));
    }
}
