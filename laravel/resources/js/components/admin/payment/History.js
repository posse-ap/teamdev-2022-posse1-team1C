import React from "react";
import ReactDOM from "react-dom";

const History = () => {
    return (
        <div className="block w-full h-full bg-white rounded-md shadow-lg px-10 pt-10">
            <h2 className="font-bold text-2xl">履歴</h2>
            <div></div>
        </div>
    );
};

export default History;

if (document.getElementById("history")) {
    ReactDOM.render(<History />, document.getElementById("history"));
}
