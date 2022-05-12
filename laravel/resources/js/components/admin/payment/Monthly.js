import React from "react";
import PaymentList from "./PaymentList";

const Monthly = () => {
    const data = [
        {
            name: "林千翼子",
            email: "chiyoko.chocochick@gmail.com",
            phone: "09033490834",
            ticket: 2,
            paypay: "https://qr.paypay.ne.jp/76LucDdT0p8IpHv5",
            isPaid: true,
        },
        {
            name: "穴田竜大",
            email: "ryudai.anada@keio.jp",
            phone: "07012540066",
            ticket: 1,
            paypay: "https://qr.paypay.ne.jp/vN8WpVoN90JbCMuy",
            isPaid: false,
        },
    ];
    return <PaymentList data={data} title="今月のお支払い" />;
};

export default Monthly;
