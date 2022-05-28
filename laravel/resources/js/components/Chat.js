import React, { useRef, useState, useEffect, useCallback } from "react";
import ReactDOM from "react-dom";
import axios from "axios";

const Chat = () => {
    const user_data = document.getElementById("chat").dataset;

    const is_mentor = user_data.is_mentor;

    const thread_id = user_data.thread_id;

    const fixed_phrases = [
        "ありがとうございます。",
        "承知いたしました。",
        "よろしくお願いいたします！",
    ];

    // textareaの情報を管理する
    const textareaRef = useRef();

    // スクロールする目標地点を設定
    const ref = useRef();

    // スクロール処理
    const scrollToBottomOfList = useCallback(() => {
        ref.current.scrollIntoView();
    }, [ref]);

    // メッセージを管理する
    const [messages, setMessages] = useState();

    // 自動でデータを繰り返し取得するために、useEffectが発火する材料として使う
    const [count, setCount] = useState(0);

    // countが変わるごとに、メッセージを繰り返し取得する
    useEffect(() => {
        const fetch = async () => {
            try {
                // データベースからメッセージを取得する
                const res = await axios.get("/api/chat");
                setMessages(res.data);

                // 初回表示時に、チャットの最下端まで自動スクロールする
                if (count === 0) {
                    scrollToBottomOfList();
                }
            } catch (e) {
                console.error(e);
            }
        };
        fetch();
        // 任意の秒数にインターバルを設定
        const intervalId = setInterval(() => {
            // countを+1する
            setCount((prevCount) => prevCount + 1);
        }, 3000);
        return () => clearInterval(intervalId);
    }, [count]);

    // チャットをEnterで送信する
    const onEnterPress = (e) => {
        // Enterで改行しない。Shift+Enterで改行できる。
        if (e.keyCode == 13 && e.shiftKey == false) {
            e.preventDefault();

            // 空白や改行のみは送信できないようにする
            if (!textareaRef.current.value.match(/\S/g)) {
                return;
            } else {
                // メッセージをPOSTする
                postMessage(textareaRef.current.value);
            }

            // textareaの中身を空にする
            textareaRef.current.value = "";
        }
    };

    // メッセージをPOSTする関数
    const postMessage = async (content) => {
        // 送信するメッセージをtextareaから取得
        setMessages([
            ...messages,
            {
                thread_id: thread_id,
                is_mentor: is_mentor,
                content: content,
            },
        ]);

        try {
            await axios.post("/api/chat", {
                thread_id: thread_id,
                is_mentor: is_mentor,
                content: content,
            });
            // メッセージ送信時にチャットの最下端までスクロール
            scrollToBottomOfList();
        } catch (e) {
            console.error(e);
        }
    };

    // メッセージがある時、送信者によって表示位置を左右に出し分ける
    let messageNodes = "";
    if (messages) {
        messageNodes = messages.map((message) => {
            if (message.is_mentor == is_mentor) {
                return (
                    <li className="bg-[#13B1C0] text-white p-2 ml-auto rounded-md inline-block max-w-sm break-words">
                        {message.content}
                    </li>
                );
            } else {
                return (
                    <li className="bg-[#13B1C0] text-white p-2 mr-auto rounded-md inline-block max-w-sm break-words">
                        {message.content}
                    </li>
                );
            }
        });
    }

    return (
        <div className="h-full">
            <section className="h-3/5 overflow-scroll">
                <ul className="flex flex-col gap-y-3 py-5 px-5">
                    {messageNodes}
                </ul>
                <div ref={ref}></div>
            </section>
            <section className="h-2/5">
                <ul className="h-16 bg-white flex gap-5 px-5 overflow-scroll">
                    {fixed_phrases.map((fixed_phrase) => {
                        return (
                            <li
                                className="shrink-0 my-auto bg-[#13B1C0] text-white p-2 rounded-md shadow-md cursor-pointer hover:opacity-80"
                                onClick={() => postMessage(fixed_phrase)}
                            >
                                {fixed_phrase}
                            </li>
                        );
                    })}
                </ul>
                <div className="h-[calc(100%-4rem)]">
                    <textarea
                        ref={textareaRef}
                        className="h-full w-full outline-none resize-none bg-transparent border-2 focus:border-blue-200 px-5"
                        placeholder="テキストを入力"
                        onKeyDown={onEnterPress}
                    ></textarea>
                </div>
            </section>
        </div>
    );
};

export default Chat;

if (document.getElementById("chat")) {
    ReactDOM.render(<Chat />, document.getElementById("chat"));
}
