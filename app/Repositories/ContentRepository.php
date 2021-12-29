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

    public function getById(int $id)
    {
        return $this->content->find($id);
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
            ->where('deleted_flag', config('const.content.deleted_flag.false'))
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
        return $this->content->find($content_id);
    }

    /**
     * 投稿内容の保存
     *
     * @param Request $requestBody
     * @return Model
     */
    public function create($requestBody)
    {
        return $this->content->create($requestBody);
    }

    /**
     * 投稿内容の保存
     *
     * @param array $requestBody
     * @return Model
     */
    public function update($requestBody)
    {
        $content = $this->getById($requestBody['id']);
        return $content->update($requestBody);
    }

    /**
     * 投稿削除
     *
     * @param integer $content_id
     * @return Model
     */
    public function delete(int $content_id)
    {
        $content_info = $this->content->find($content_id);
        $content_info->deleted_flag = config('const.content.deleted_flag.true');
        return $content_info->save();
    }
}
