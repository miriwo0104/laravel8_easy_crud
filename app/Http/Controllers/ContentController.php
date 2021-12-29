<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Http\Requests\UpdateContentRequest;

class ContentController extends Controller
{

    public function __construct(
        ContentService $contentService
    )
    {
        $this->contentService = $contentService;
    }

    /**
     * 投稿一覧ページの表示
     *
     * @return view
     */
    public function list()
    {
        $content_infos = $this->contentService->getAllContentList();
        return view('contents.list', ['content_infos' => $content_infos]);
    }

    /**
     * 新規投稿作成
     *
     * @return view
     */
    public function createForm()
    {
        return view('contents.create');
    }

    /**
     * 投稿編集
     *
     * @param integer $content_id
     * @return view
     */
    public function updateForm(int $content_id)
    {
        $content_info = $this->contentService->getContentInfoByContentId($content_id);
        return view('contents.update', ['content_info' => $content_info]);
    }

    /**
     * 投稿削除
     *
     * @param integer $content_id
     * @return view
     */
    public function delete(int $content_id)
    {
        $this->contentService->delete($content_id);
        return redirect(route('contents.list'));
    }

    /**
     * 新規作成・投稿編集の情報保存
     *
     * @param ContentRequest $post_data
     * @return view
     */
    public function create(ContentRequest $request)
    {
        $requestBody = $request->validated();
        $this->contentService->create($requestBody);
        return redirect(route('contents.list'));
    }

    /**
     * 新規作成・投稿編集の情報保存
     *
     * @param UpdateContentRequest $post_data
     * @return view
     */
    public function update(UpdateContentRequest $request)
    {
        $requestBody = $request->validated();
        $this->contentService->update($requestBody);
        return redirect(route('contents.list'));
    }
}
