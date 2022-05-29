import React, { createRef, useRef, useState } from "react";
import ReactDOM from "react-dom";

const date = new Date();
// 今日から7日を取得
const week = [];
// 6時~24時
const hours = [];
// 00分~50分
const minutes = [];
for (let day = 0; day <= 6; day++) {
    week.push(`${date.getMonth() + 1}/${date.getDate() + day}`);
}
for (let hour = 6; hour <= 23; hour++) {
    hours.push(hour);
}
for (let minute = 0; minute <= 50; minute += 10) {
    minutes.push(("00" + minute).slice(-2));
}

function MenteeCalendar(props) {
    // アコーディオンを開いた時間リスト
    const [checkedHours, setCheckedHours] = useState([]);
    // 候補日程リスト
    const [possibleDates, setPossibleDates] = useState([]);
    // 各セルのref
    const calendarRef = useRef([]);
    hours.forEach((hour) => {
        minutes.forEach((minute) => {
            week.forEach((day) => {
                calendarRef.current[`${day}_${hour}_${minute}`] = createRef();
            });
            if (minute !== "00") {
                calendarRef.current[`${hour}_${minute}`] = createRef();
            }
        });
    });

    // アコーディオンを開く処理
    const openAccordion = (hour) => {
        if (checkedHours.includes(hour)) {
            setCheckedHours(checkedHours.filter((item) => item !== hour));
        } else {
            setCheckedHours([...checkedHours, hour]);
        }
        minutes.forEach((minute) => {
            if (minute !== "00") {
                const calendar =
                    calendarRef.current[`${hour}_${minute}`].current;
                calendar.classList.toggle("hidden");
                calendar.classList.toggle("grid");
            }
        });
    };

    // セルをチェックする処理
    const checkCalendar = (day, hour, minute) => {
        const checkedCell = `${day}_${hour}_${minute}`;
        let checkedCells = [...possibleDates];

        // 最後にまとめて色を付けるため、全て色を外す
        checkedCells.forEach((checkedCell) => {
            calendarRef.current[checkedCell].current.classList.remove(
                "checkedCellColor"
            );
        });

        // アコーディオンが開いていない00分のセルをチェックした時、50分まで全て変更する
        if (minute === "00" && !checkedHours.includes(hour)) {
            if (!checkedCells.includes(checkedCell)) {
                minutes.forEach((minute) => {
                    if (!checkedCells.includes(`${day}_${hour}_${minute}`)) {
                        checkedCells.push(`${day}_${hour}_${minute}`);
                    }
                });
            } else {
                minutes.forEach((minute) => {
                    checkedCells = checkedCells.filter(
                        (item) => item !== `${day}_${hour}_${minute}`
                    );
                });
            }
        }
        // セルを一つずつチェックする場合
        else {
            if (checkedCells.includes(checkedCell)) {
                checkedCells = checkedCells.filter(
                    (item) => item !== checkedCell
                );
            } else {
                checkedCells.push(checkedCell);
            }
        }

        // 候補日程に色を付ける
        checkedCells.forEach((checkedCell) => {
            calendarRef.current[checkedCell].current.classList.add(
                "checkedCellColor"
            );
        });
        setPossibleDates(checkedCells);
    };

    const submitCalendar = () => {
        const this_year = new Date().getFullYear();
        let new_dates = [];
        possibleDates.forEach((possibleDate, i) => {
            let dates = possibleDate.split("_");
            let month = ("00" + dates[0].split("/")[0]).slice(-2);
            let day = ("00" + dates[0].split("/")[1]).slice(-2);
            let hour = ("00" + dates[1]).slice(-2);
            let minute = ("00" + dates[2]).slice(-2);
            new_dates[i] = `${this_year}-${month}-${day} ${hour}:${minute}`;
        });
        alert(new_dates);
        props.setSentCalendar(true);
    };

    return (
        <div className="p-10">
            <p className="font-bold text-2xl text-center my-10 bg-white table mx-auto p-5 rounded-md">
                空いている日程を
                <br />
                選択して送信しましょう
            </p>
            <section className="bg-gray-50 p-5 pr-10">
                <ul className="grid grid-cols-9 text-center mb-2 text-lg">
                    {/* 空白 */}
                    <li></li>
                    <li></li>
                    {week.map((day) => {
                        return <li key={day}>{day}</li>;
                    })}
                </ul>
                {hours.map((hour) => {
                    return (
                        <div key={hour}>
                            {minutes.map((minute) => {
                                if (minute == "00")
                                    return (
                                        <ul
                                            key={`${hour}_${minute}`}
                                            className="grid grid-cols-9 gap-2 mb-2 h-10"
                                        >
                                            <li
                                                className="w-0 h-0 border-x-[16px] border-y-[8px] border-y-transparent border-r-transparent border-l-black ml-auto my-auto"
                                                onClick={() =>
                                                    openAccordion(hour)
                                                }
                                            ></li>
                                            <li className="my-auto text-lg">
                                                {hour}:{minute}
                                            </li>
                                            {week.map((day) => {
                                                return (
                                                    <label
                                                        key={`${hour}_${day}_${minute}`}
                                                        className="bg-gray-200 w-full"
                                                        ref={
                                                            calendarRef.current[
                                                                `${day}_${hour}_${minute}`
                                                            ]
                                                        }
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            className="hidden"
                                                            onChange={() => {
                                                                checkCalendar(
                                                                    day,
                                                                    hour,
                                                                    minute
                                                                );
                                                            }}
                                                        />
                                                    </label>
                                                );
                                            })}
                                        </ul>
                                    );
                                else {
                                    return (
                                        <ul
                                            key={`${hour}_${minute}`}
                                            className="grid-cols-9 gap-2 mb-2 h-10 top-0 hidden transition-all"
                                            ref={
                                                calendarRef.current[
                                                    `${hour}_${minute}`
                                                ]
                                            }
                                        >
                                            {/* 空白 */}
                                            <li></li>
                                            <li className="my-auto text-lg">
                                                {hour}:{minute}
                                            </li>
                                            {week.map((day) => {
                                                return (
                                                    <label
                                                        key={`${hour}_${day}_${minute}`}
                                                        className="bg-gray-200 w-full"
                                                        ref={
                                                            calendarRef.current[
                                                                `${day}_${hour}_${minute}`
                                                            ]
                                                        }
                                                    >
                                                        <input
                                                            type="checkbox"
                                                            className="hidden"
                                                            onChange={() => {
                                                                checkCalendar(
                                                                    day,
                                                                    hour,
                                                                    minute
                                                                );
                                                            }}
                                                        />
                                                    </label>
                                                );
                                            })}
                                        </ul>
                                    );
                                }
                            })}
                        </div>
                    );
                })}
            </section>
            <div>
                <button
                    className="bg-[#13B1C0] text-white text-3xl font-bold py-3 px-16 mx-auto mt-5 rounded-md relative left-1/2 -translate-x-1/2"
                    onClick={submitCalendar}
                >
                    送信する
                </button>
            </div>
        </div>
    );
}

export default MenteeCalendar;

if (document.getElementById("mentee_calendar")) {
    ReactDOM.render(
        <MenteeCalendar />,
        document.getElementById("mentee_calendar")
    );
}
