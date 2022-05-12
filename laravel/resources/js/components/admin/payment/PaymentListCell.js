import React, { useState } from "react";

const PaymentListCell = (props) => {
    const [paymentStatus, setPaymentStatus] = useState(props.isPaid);
    return (
        <ul className="flex w-[150%] gap-5 mt-5 text-center items-center">
            <li className="w-[10%]">{props.name}</li>
            <li className="w-[25%]">
                <ul>
                    <li>メール：{props.email}</li>
                    <li>電話番号：{props.phone}</li>
                </ul>
            </li>
            <li className="w-[7%]">{props.ticket}枚</li>
            <li className="w-[8%]">{props.ticket * 1000}円</li>
            <li className="w-[25%]">{props.paypay}</li>
            <li className="w-[15%]">
                <input
                    type="button"
                    value="QRコードを表示"
                    className="shadow active:bg-[#E2F0F2] hover:shadow-md py-2 px-3 cursor-pointer"
                />
            </li>
            <li className="w-[10%]">
                <label className="cursor-pointer">
                    <input
                        type="checkbox"
                        checked={paymentStatus}
                        className="cursor-pointer"
                        onChange={() => setPaymentStatus(!paymentStatus)}
                    />
                    <span className="ml-1">
                        {paymentStatus ? "お支払い済み" : "お支払い未完"}
                    </span>
                </label>
            </li>
        </ul>
    );
};

export default PaymentListCell;
