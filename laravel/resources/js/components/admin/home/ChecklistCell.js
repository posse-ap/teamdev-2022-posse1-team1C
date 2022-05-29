import React, { useRef } from "react";

const ChecklistCell = (props) => {
    const remarksRef = useRef(props.remarks);
    return (
        <ul className="flex w-[170%] gap-5 mt-5">
            <li className="w-[5%]">No.{props.number + 1}</li>
            <li className="w-[15%]">{props.start_date}~</li>
            <ul className="w-[40%]">
                <li>メンター：{props.mentor_email}</li>
                <li>メンティー：{props.mentee_email}</li>
            </ul>
            <li className="w-[20%]">{props.cancellation_reason}</li>
            <li className="w-[20%]">
                <textarea
                    defaultValue={remarksRef.current}
                    className="border-2 rounded resize-none outline-none focus:border-[#13B1C0]"
                    onChange={(newRemarks) => (remarksRef.current = newRemarks)}
                />
            </li>
        </ul>
    );
};

export default ChecklistCell;
