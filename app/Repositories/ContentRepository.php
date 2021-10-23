<?php

namespace App\Repositories;

use App\Models\Content;
use Illuminate\Database\Eloquent\Model;

class ContentRepository implements ContentRepositoryInterface
{
    public function __construct(Content $content)
    {
        $this->content = $content;   
    }

    /**
     * 投稿内容の取得
     *
     * @return Model
     */
    public function getAllContentList()
    {
        return $this->content
            ->select('*')
            ->where('deleted_flag', config('const.deleted_flag.not_deleted'))
            ->get();
    }

    /**
     * 投稿内容IDに紐づく投稿内容の取得
     *
     * @param integer $content_id
     * @return Model
     */
    public function getContentInfoByContentId(int $content_id)
    {
        return $this->content
            ->find($content_id);
    }

    /**
     * 投稿内容の保存
     *
     * @param array $post_info
     * @return Model
     */
    public function save(array $post_info)
    {
        $content_info = $this->content;
    }
}
