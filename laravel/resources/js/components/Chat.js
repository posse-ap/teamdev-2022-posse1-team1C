import React, { useRef, useState, useEffect, useCallback } from "react";
import ReactDOM from "react-dom";
import axios from "axios";
import MenteeCalendar from "./schedule/MenteeCalendar";

const Chat = () => {
    const [sentCalendar, setSentCalendar] = useState(false);

    const user_data = document.getElementById("chat").dataset;

    const is_mentor = Number(user_data.is_mentor);

    const thread_id = user_data.thread_id;

    const fixed_phrases = [
        "ありがとうございます！",
        "承知いたしました",
        "よろしくお願いいたします！",
        "すみません",
        "少し遅れます",
        "先に待っています",
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
                const res = await axios.get(`/api/chat/${thread_id}`);
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
            if (message.is_mentor === is_mentor) {
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
            {sentCalendar ? (
                <>
                    <section className="w-full h-screen fixed top-0 left-0 overflow-scroll z-10 hidden">
                        <div className="w-1/2 mx-auto">
                            <MenteeCalendar setSentCalendar={setSentCalendar} />
                        </div>
                    </section>
                    <div className="bg-black opacity-20 w-full h-screen fixed top-0 left-0 z-5 hidden"></div>
                </>
            ) : (
                <>
                    <section className="w-full h-screen fixed top-0 left-0 overflow-scroll z-10">
                        <div className="w-1/2 mx-auto">
                            <MenteeCalendar setSentCalendar={setSentCalendar} />
                        </div>
                    </section>
                    <div className="bg-black opacity-20 w-full h-screen fixed top-0 left-0 z-5"></div>
                </>
            )}
            <section className="h-2/3 overflow-scroll">
                <ul className="flex flex-col gap-y-3 py-5 px-10 whitespace-pre-line">
                    {messageNodes}
                </ul>
                <div ref={ref}></div>
            </section>
            <section className="h-1/3">
                <div className="flex bg-white h-16 px-10">
                    <ul className="h-full flex gap-5 overflow-scroll">
                        {fixed_phrases.map((fixed_phrase) => {
                            return (
                                <li
                                    className="shrink-0 my-auto bg-[#13B1C0] text-white font-bold text-lg h-10 leading-10 px-10 rounded-md shadow-md cursor-pointer hover:opacity-80"
                                    onClick={() => postMessage(fixed_phrase)}
                                >
                                    {fixed_phrase}
                                </li>
                            );
                        })}
                    </ul>
                    {!is_mentor ? (
                        <div className="h-full text-white border-l-2 box-border pl-5 ml-5">
                            <button className="w-48 relative top-1/2 -translate-y-1/2 bg-[#13B1C0] font-bold text-lg h-10 px-5 rounded-md shadow-md hover:opacity-80">
                                <i className="fa-solid fa-calendar-days mr-2"></i>
                                日程再調整
                            </button>
                        </div>
                    ) : (
                        <></>
                    )}
                </div>
                <div className="h-[calc(100%-4rem)]">
                    <textarea
                        ref={textareaRef}
                        className="h-full w-full outline-none resize-none bg-transparent border-2 focus:border-blue-200 px-10 text-xl"
                        placeholder="テキストを入力"
                        onKeyDown={onEnterPress}
                    ></textarea>
                </div>
            </section>

            {sentCalendar ? (
                <div className="h-24 bg-white fixed bottom-0 w-full">
                    <a className="bg-[#13B1C0] py-3 px-16 rounded-md shadow-md hover:opacity-80 text-white font-bold text-3xl mx-auto table relative top-1/2 -translate-y-1/2 cursor-pointer">
                        通話を開始する
                    </a>
                </div>
            ) : (
                <div className="h-24 bg-white fixed bottom-0 w-full -z-10">
                    <a className="bg-[#13B1C0] py-3 px-16 rounded-md shadow-md hover:opacity-80 text-white font-bold text-3xl mx-auto table relative top-1/2 -translate-y-1/2 cursor-pointer">
                        通話を開始する
                    </a>
                </div>
            )}
        </div>
    );
};

export default Chat;

if (document.getElementById("chat")) {
    ReactDOM.render(<Chat />, document.getElementById("chat"));
}
