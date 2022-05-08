import React, { useRef, useState, useEffect, useCallback } from "react";
import ReactDOM from "react-dom";
import axios from "axios";

// TODO is_mentorカラムをusersテーブルに追加する
const user_id = document.getElementById("chat")?.dataset.user_id;

const threadId = 1;

const userRole = user_id !== 3 ? "mentor" : "mentee";

const Chat = () => {
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
                // 送信するメッセージをtextareaから取得
                setMessages([
                    ...messages,
                    {
                        sender: userRole,
                        content: textareaRef.current.value,
                    },
                ]);

                // メッセージをPOSTする
                const post = async () => {
                    try {
                        await axios.post("/api/chat", {
                            thread_id: threadId,
                            sender: userRole,
                            content: textareaRef.current.value,
                        });
                        // メッセージ送信時にチャットの最下端までスクロール
                        scrollToBottomOfList();
                    } catch (e) {
                        console.error(e);
                    }
                };
                post();
            }

            // textareaの中身を空にする
            textareaRef.current.value = "";
        }
    };

    // メッセージがある時、送信者によって表示位置を左右に出し分ける
    let messageNodes = "";
    if (messages) {
        messageNodes = messages.map((message) => {
            if (message.sender === userRole) {
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
                <ul className="flex flex-col gap-y-3 pt-5 px-5">
                    {messageNodes}
                </ul>
                <div ref={ref}></div>
            </section>
            <section className="h-2/5">
                <div className="h-16 bg-white"></div>
                <div className="h-[calc(100%-4rem)]">
                    <textarea
                        ref={textareaRef}
                        className="h-full w-full outline-none resize-none bg-transparent border-2 focus:border-blue-200"
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
