import React from "react";
import ValueContainer from "./ValueContainer";

const ValueContainerWrapper = () => {
    const data = [
        {
            title: "今月の新規メンター数",
            value: 54,
            unit: "人",
        },
        {
            title: "累計メンティー数",
            value: 125,
            unit: "人",
        },
        {
            title: "相談成立率",
            value: 36,
            unit: "%",
        },
    ];

    return (
        <div className="flex text-center gap-5">
            {data.map((datum, key) => {
                return (
                    <ValueContainer
                        key={key}
                        title={datum.title}
                        value={datum.value}
                        unit={datum.unit}
                    />
                );
            })}
        </div>
    );
};

export default ValueContainerWrapper;
