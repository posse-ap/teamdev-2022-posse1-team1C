import React from "react";
import ReactDOM from "react-dom";

// require
const Peer = require('skyway-js');

const Call = () => {
    
    let localStream;
    let audioTrack;
    
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
        // 最初はミュート状態にする
        audioTrack = localStream.getAudioTracks()[0];
        audioTrack.enabled = false;
    }).catch(error => {
        // 失敗時にはエラーログを出力
        console.error('mediaDevice.getUserMedia() error:', error);
        return;
    });
    
    //Peer作成
    const peer = new Peer({
        key: process.env.MIX_PEER_ID,
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
            if(audioTrack.enabled){
                audioTrack.enabled = false;
            }else{
                audioTrack.enabled = true;
            };
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
    
    return <div></div>;
}

export default Call;

if (document.getElementById("call")) {
    ReactDOM.render(<Call />, document.getElementById("call"));
}
