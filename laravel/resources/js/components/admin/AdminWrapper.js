import React from "react";
import ReactDOM from "react-dom";
import AdminHome from "./home/AdminHome";
import AdminPayment from "./payment/AdminPayment";
import Monthly from "./payment/Monthly";
import History from "./payment/History";
import {
    BrowserRouter,
    Routes,
    Route,
    NavLink,
    useLocation,
} from "react-router-dom";

const AdminLayout = () => {
    const adminLocation = useLocation().pathname;
    const paths = [
        "/admin",
        "/admin/payment/monthly",
        "/admin/payment/history",
    ];
    return (
        <div className="h-screen box-border">
            <header className="h-20"></header>

            <div className="h-[calc(100%-5rem)] bg-[#F4F8FA] flex pt-16 pb-16">
                <section className="w-60 font-bold pl-3">
                    <NavLink
                        className={
                            "inline-block mb-8 py-4 cursor-pointer " +
                            (adminLocation === paths[0] ? "admin_location" : "")
                        }
                        to="/admin"
                    >
                        <span className="py-4 px-6">
                            <i className="fa-solid fa-house-chimney pr-2"></i>
                            ホーム
                        </span>
                    </NavLink>
                    <div className="group relative">
                        <span
                            className={
                                "hover:cursor-pointer py-4 px-6 " +
                                (adminLocation === paths[1] ||
                                adminLocation === paths[2]
                                    ? "admin_location"
                                    : "")
                            }
                        >
                            <i className="fa-solid fa-coins pr-2"></i>
                            お支払い管理
                            <i className="fa-solid fa-angle-right ml-3 transition-all group-hover:ml-4"></i>
                        </span>
                        <div className="absolute w-40 left-[calc(100%-2rem)] t-0 -mt-5 bg-white shadow-md opacity-0 group-hover:opacity-100 transition-all pointer-events-none group-hover:pointer-events-auto">
                            <div className="border-b-2">
                                <p className="ml-3 py-2">お支払い管理</p>
                            </div>
                            <NavLink
                                className="block hover:bg-[#F4F8FA]"
                                to="/admin/payment/monthly"
                            >
                                <p className="font-normal group-hover:cursor-pointer block ml-3 py-2">
                                    今月のお支払い
                                </p>
                            </NavLink>
                            <NavLink
                                className="block hover:bg-[#F4F8FA] "
                                to="/admin/payment/history"
                            >
                                <p className="font-normal group-hover:cursor-pointer block ml-3 py-2">
                                    履歴
                                </p>
                            </NavLink>
                        </div>
                    </div>
                </section>
                <section className="w-[calc(100%-15rem)] pr-60">
                    <Routes>
                        <Route path="/admin" element={<AdminHome />} />
                        <Route path="/admin/payment" element={<AdminPayment />}>
                            <Route path="monthly" element={<Monthly />} />
                            <Route path="history" element={<History />} />
                        </Route>
                    </Routes>
                </section>
            </div>
        </div>
    );
};

const AdminWrapper = () => {
    return (
        <BrowserRouter>
            <AdminLayout />
        </BrowserRouter>
    );
};

export default AdminWrapper;

if (document.getElementById("admin_wrapper")) {
    ReactDOM.render(<AdminWrapper />, document.getElementById("admin_wrapper"));
}
