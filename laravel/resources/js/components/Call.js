import React from "react";
import ReactDOM from "react-dom";
// require
const Peer = require('skyway-js');

const Call = () => {
    
    let localStream;
    
    // カメラ映像・音声取得
    navigator.mediaDevices?.getUserMedia({
        video: false,
        audio: true
    })
    .then(stream => {
        // 成功時にaudio要素に音声をセット
        const audioElm = document.getElementById('my-audio');
        audioElm.srcObject = stream;
        // 着信時に相手に音声情報を返せるように、グローバル変数に保存しておく
        localStream = stream;
    }).catch(error => {
        // 失敗時にはエラーログを出力
        console.error('mediaDevice.getUserMedia() error:', error);
        return;
    });
    
    //Peer作成
    const peer = new Peer({
        key: '3509b80b-8a54-44d8-bcd6-5c5bcc36a50c',
        debug: 3
    });
    
    //PeerID取得
    peer.on('open', () => {
        document.getElementById('my-id').textContent = "あなたのID:"+peer.id;
    });
    
    // 発信処理
    document.getElementById('make-call').onclick = () => {
        const theirID = document.getElementById('their-id').value;
        const mediaConnection = peer.call(theirID, null, {
            audioReceiveEnabled: true,
        });
        setEventListener(mediaConnection);
    };

    //ｍute処理
    document.getElementById('ismute').onclick = () => {
        const audio = document.getElementById('my-audio');
        audio.classList.toggle('muted');
        const mute = document.getElementById('mute');
        mute.classList.toggle('hidden');
        const unmute = document.getElementById('unmute');
        unmute.classList.toggle('hidden');
    };
    
    // イベントリスナを設置する関数
    const setEventListener = mediaConnection => {
        mediaConnection.on('stream', stream => {
            // audio要素に相手の音声情報をセットして再生
            const audioElm = document.getElementById('their-audio')
            audioElm.srcObject = stream;
            audioElm.play();
        });
    }
    
    //着信処理
    peer.on('call', mediaConnection => {
        mediaConnection.answer(localStream);
        setEventListener(mediaConnection);
    });
    
    //errorイベント
    peer.on('error', err => {
        alert(err.message);
    });
    
    //closeイベント
    document.getElementById('hangup-call').onclick = () => {
        alert('通信が切断しました。');
        // peer.on('close', () => {
            
        // });
    }
    
    console.log("動いているよ")

    return <div></div>;
}

export default Call;

if (document.getElementById("call")) {
    ReactDOM.render(<Call />, document.getElementById("call"));
}
