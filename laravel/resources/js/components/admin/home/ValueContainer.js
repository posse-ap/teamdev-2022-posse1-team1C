import React from "react";

const ValueContainer = (props) => {
    return (
        <div className="w-1/3 bg-white py-5 rounded-md shadow-lg font-bold text-[#13B1C0]">
            <h2>{props.title}</h2>
            <p className="text-3xl my-1 text-black">{props.value}</p>
            <p>{props.unit}</p>
        </div>
    );
};

export default ValueContainer;
