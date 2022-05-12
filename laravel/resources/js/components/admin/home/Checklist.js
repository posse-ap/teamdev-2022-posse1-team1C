import React from "react";
import ChecklistCell from "./ChecklistCell";

const Checklist = () => {
    const data = [
        {
            start_date: "2022/04/11 19:00",
            mentor_email: "ryudai.anada@keio.jp",
            mentee_email: "bigdragon.06102001@gmail.com",
            cancellation_reason: "システムエラー",
            remarks: "林がメールで対応中",
        },
        {
            start_date: "2022/04/12 20:00",
            mentor_email: "ryudai.anada@keio.jp",
            mentee_email: "bigdragon.06102001@gmail.com",
            cancellation_reason: "その他(相手のネットワーク環境が悪かった)",
            remarks: "林がメールで対応中",
        },
        {
            start_date: "2022/04/11 19:00",
            mentor_email: "ryudai.anada@keio.jp",
            mentee_email: "bigdragon.06102001@gmail.com",
            cancellation_reason: "システムエラー",
            remarks: "林がメールで対応中",
        },
        {
            start_date: "2022/04/12 20:00",
            mentor_email: "ryudai.anada@keio.jp",
            mentee_email: "bigdragon.06102001@gmail.com",
            cancellation_reason: "その他(相手のネットワーク環境が悪かった)",
            remarks: "林がメールで対応中",
        },
        {
            start_date: "2022/04/11 19:00",
            mentor_email: "ryudai.anada@keio.jp",
            mentee_email: "bigdragon.06102001@gmail.com",
            cancellation_reason: "システムエラー",
            remarks: "林がメールで対応中",
        },
        {
            start_date: "2022/04/12 20:00",
            mentor_email: "ryudai.anada@keio.jp",
            mentee_email: "bigdragon.06102001@gmail.com",
            cancellation_reason: "その他(相手のネットワーク環境が悪かった)",
            remarks: "林がメールで対応中",
        },
    ];
    return (
        <div className="w-full h-full">
            <ul className="flex w-[170%] gap-5 mt-5 font-bold text-[#13B1C0]">
                <li className="w-[5%]">番号</li>
                <li className="w-[15%]">相談日時</li>
                <ul className="w-[40%]">
                    <li>メールアドレス</li>
                </ul>
                <li className="w-[20%]">相談状況</li>
                <li className="w-[20%]">備考</li>
            </ul>
            {data.map((datum, key) => {
                return <ChecklistCell key={key} number={key} {...datum} />;
            })}
        </div>
    );
};

export default Checklist;
