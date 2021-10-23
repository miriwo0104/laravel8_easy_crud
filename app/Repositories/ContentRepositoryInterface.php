<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface ContentRepositoryInterface
{
    /**
     * 投稿内容の取得
     *
     * @return Model
     */
    public function getAllContentList();

    /**
     * 投稿内容IDに紐づく投稿内容の取得
     * 
     * @param integer $content_id
     * @return Model
     */
    public function getContentInfoByContentId(int $content_id);

    /**
     * 投稿内容の保存
     * 
     * @param array $post_info
     * @return Model
     */
    public function save(array $post_info)
}