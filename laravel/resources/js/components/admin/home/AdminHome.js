import React from "react";
import DoughnutChart from "./DoughnutChart";
import ValueContainerWrapper from "./ValueContainerWrapper";
import Checklist from "./Checklist";

const AdminHome = () => {
    return (
        <div className="flex h-full">
            <section className="w-2/3 h-full flex flex-col">
                <ValueContainerWrapper />
                <div className="w-full h-full mt-8 flex flex-col bg-white rounded-md shadow-lg py-5 px-5 overflow-scroll">
                    <h2 className="font-bold text-xl mb-2">
                        チケット返却にあたり
                        <br />
                        事実確認が必要な相談一覧
                    </h2>
                    <Checklist />
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
