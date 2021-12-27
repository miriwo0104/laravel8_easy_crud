<?php

namespace App\Http\Controllers;

use Illuminate\Notifications\Notifiable;
use App\Http\Requests\SlackRequest;
use App\Notifications\Slack;

class SlackController extends Controller
{
    use Notifiable;

    /**
     * Slackに通知する文字列入力ページの表示
     *
     * @return view
     */
    public function index()
    {
        return view('slacks.index');
    }

    /**
     * Slackへの通知
     *
     * @param SlackRequest $request
     * @return redirect
     */
    public function send(SlackRequest $request)
    {
        $requestBody = $request->validated();
        $this->notify(new Slack($requestBody['str']));

        return redirect(route('slack.index'));
    }

    /**
     * 通知を行うWebhook URLの設定
     *
     * @param mix $notification
     * @return slackWebhookUrl
     */
    public function routeNotificationForSlack($notification)
    {
        return config('app.slack_url');
    }
}
