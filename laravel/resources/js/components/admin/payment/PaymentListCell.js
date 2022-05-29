import React, { useRef, useState } from "react";

const PaymentListCell = (props) => {
    const [paymentStatus, setPaymentStatus] = useState(props.isPaid);
    const modalRef = useRef();
    const qrRef = useRef();
    const makeQRCode = () => {
        if (paymentStatus) {
            alert("お支払い済みです");
        } else {
            openModal();
            new QRCode(qrRef.current, props.paypay);
        }
    };
    const openModal = () => {
        const modalNode = modalRef.current;
        modalNode.classList.remove("hidden");
        modalNode.classList.add("block");
    };
    const closeModal = () => {
        const modalNode = modalRef.current;
        const qrNode = qrRef.current;
        modalNode.classList.add("hidden");
        modalNode.classList.remove("block");
        while (qrNode.firstChild) {
            qrNode.removeChild(qrNode.firstChild);
        }
    };
    const confirmPayment = () => {
        closeModal();
        setPaymentStatus(true);
    };
    return (
        <>
            <ul className="flex w-[150%] mt-5 text-center items-center">
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
                        onClick={makeQRCode}
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
            <span
                className="absolute top-0 left-0 w-screen h-screen hidden"
                ref={modalRef}
            >
                <div
                    className="w-full h-screen absolute top-0 left-0 bg-black opacity-20"
                    onClick={closeModal}
                ></div>
                <div className="text-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white p-10">
                    <div className="flex mb-10">
                        <div className="mr-10 my-auto">
                            <p className="mb-3 font-bold text-lg">
                                {props.name}
                            </p>
                            <p>{props.ticket * 1000}円</p>
                        </div>
                        <div ref={qrRef} className="w-64"></div>
                    </div>
                    <div className="flex gap-5 justify-center">
                        <input
                            type="button"
                            value="お支払い完了"
                            className="shadow-md active:bg-[#E2F0F2] hover:shadow-md py-2 px-3 cursor-pointer font-bold text-[#13B1C0] text-xl"
                            onClick={confirmPayment}
                        />
                        <input
                            type="button"
                            value="キャンセル"
                            className="shadow-md active:bg-[#E2F0F2] hover:shadow-md py-2 px-3 cursor-pointer font-bold text-lg"
                            onClick={closeModal}
                        />
                    </div>
                </div>
            </span>
        </>
    );
};

export default PaymentListCell;
