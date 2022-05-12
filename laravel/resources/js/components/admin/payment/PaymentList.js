import React from "react";
import PaymentListCell from "./PaymentListCell";

const PaymentList = (props) => {
    return (
        <div className="w-full h-full bg-white rounded-md shadow-lg px-10 pt-10 flex flex-col">
            <h2 className="font-bold text-2xl">{props.title}</h2>
            <div className="w-full h-full overflow-scroll pb-10">
                <ul className="flex w-[150%] gap-5 mt-5 text-center items-center font-bold text-[#13B1C0]">
                    <li className="w-[10%]">名前</li>
                    <li className="w-[25%]">個人情報</li>
                    <li className="w-[7%]">チケット数</li>
                    <li className="w-[8%]">お支払い額</li>
                    <li className="w-[25%]">お支払い用URL</li>
                    <li className="w-[15%]">QRコード</li>
                    <li className="w-[10%]">お支払い状況</li>
                </ul>
                {props.data.map((datum, key) => {
                    return <PaymentListCell key={key} {...datum} />;
                })}
            </div>
        </div>
    );
};

export default PaymentList;
