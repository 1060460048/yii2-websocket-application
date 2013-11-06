<?php
namespace nizsheanez\websocket\assetBundles;

class WebSocket extends \yii\web\AssetBundle
{
    public $sourcePath = '@nizsheanez/websocket/web';
    public $baseUrl = '@web';
    public $js = [
        'js/WebSocketConnection.js',
    ];

    public $depends = [
        'nizsheanez\websocket\assetBundles\PhpDaemon',
    ];
}
