import React from "react";
import ReactDOM from "react-dom";
import DoughnutChart from "./DoughnutChart";

const AdminHome = () => {
    return (
        <div className="flex h-full">
            <section className="w-2/3 h-full flex flex-col">
                <div className="flex text-center gap-5">
                    <div className="w-1/3 bg-white py-5 rounded-md shadow-lg font-bold text-[#13B1C0]">
                        <h2>今月の新規メンティー数</h2>
                        <p className="text-3xl my-1 text-black">54</p>
                        <p>人</p>
                    </div>
                    <div className="w-1/3 bg-white py-5 rounded-md shadow-lg font-bold text-[#13B1C0]">
                        <h2>累計メンティー数</h2>
                        <p className="text-3xl my-1 text-black">125</p>
                        <p>人</p>
                    </div>
                    <div className="w-1/3 bg-white py-5 rounded-md shadow-lg font-bold text-[#13B1C0]">
                        <h2>相談成立数</h2>
                        <p className="text-3xl my-1 text-black">36</p>
                        <p>人</p>
                    </div>
                </div>
                <div className="w-full h-full mt-8 flex flex-col bg-white rounded-md shadow-lg py-5">
                    <h2 className="font-bold text-xl ml-5 mb-2">
                        チケット返却にあたり
                        <br />
                        事実確認が必要な相談一覧
                    </h2>
                    <div className="w-full h-full"></div>
                </div>
            </section>
            <section className="w-1/3 bg-white rounded-md shadow-lg ml-10">
                <h2 className="font-bold text-xl ml-5 mt-5">不成立理由</h2>
                <div className="mt-10">
                    <DoughnutChart />
                </div>
            </section>
        </div>
    );
};

export default AdminHome;

if (document.getElementById("admin_home")) {
    ReactDOM.render(<AdminHome />, document.getElementById("admin_home"));
}
