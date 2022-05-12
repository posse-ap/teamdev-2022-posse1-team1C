import React from "react";
import ReactDOM from "react-dom";
import { Outlet } from "react-router-dom";

const AdminPayment = () => {
    return (
        <div className="w-full h-full">
            <Outlet />
        </div>
    );
};

export default AdminPayment;

if (document.getElementById("admin_payment")) {
    ReactDOM.render(<AdminPayment />, document.getElementById("admin_payment"));
}
