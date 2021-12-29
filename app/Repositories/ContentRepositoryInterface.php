<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface ContentRepositoryInterface
{
    /**
     * idを用いて情報を取得
     *
     * @param integer $id
     * @return Content
     */
    public function getById(int $id);

    /**
     * 投稿内容すべての取得
     *
     * @return Model
     */
    public function getAllContentList();

    /**
     * 投稿内容の保存
     * 
     * @param Request $post_data
     * @return Model
     */
    public function create($post_data);

    /**
     * 投稿内容の更新
     * 
     * @param Request $post_data
     * @return Model
     */
    public function update($post_data);

    /**
     * 投稿削除
     *
     * @param integer $content_id
     * @return Model
     */
    public function delete(int $content_id);
}