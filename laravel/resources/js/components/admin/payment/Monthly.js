import React from "react";
import ReactDOM from "react-dom";

const Monthly = () => {
    return (
        <div className="block w-full h-full bg-white rounded-md shadow-lg px-10 pt-10">
            <h2 className="font-bold text-2xl">今月のお支払い</h2>
            <div></div>
        </div>
    );
};

export default Monthly;

if (document.getElementById("monthly")) {
    ReactDOM.render(<Monthly />, document.getElementById("monthly"));
}
