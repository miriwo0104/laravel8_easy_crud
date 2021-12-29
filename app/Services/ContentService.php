<?php

namespace App\Services;

use App\Repositories\ContentRepositoryInterface as ContentRepository;
use Illuminate\Database\Eloquent\Model;

class ContentService
{
    public function __construct(
        ContentRepository $contentRepository
    )
    {
        $this->contentRepository = $contentRepository;
    }

    /**
     * 投稿内容の取得
     *
     * @return Model
     */
    public function getAllContentList()
    {
        return $this->contentRepository->getAllContentList();
    }

    /**
     * 投稿内容IDに紐づく投稿内容の取得
     *
     * @param integer $content_id
     * @return Model
     */
    public function getContentInfoByContentId(int $content_id)
    {
        return $this->contentRepository->getContentInfoByContentId($content_id);
    }
    
    /**
     * 投稿内容の保存
     *
     * @param Request $requestBody
     * @return Model
     */
    public function create($requestBody)
    {
        return $this->contentRepository->create($requestBody);
    }

    /**
     * 投稿内容の保存
     *
     * @param array $requestBody
     * @return Model
     */
    public function update($requestBody)
    {
        return $this->contentRepository->update($requestBody);
    }

    /**
     * 投稿削除
     *
     * @param integer $content_id
     * @return Model
     */
    public function delete(int $content_id)
    {
        return $this->contentRepository->delete($content_id);
    }
}
