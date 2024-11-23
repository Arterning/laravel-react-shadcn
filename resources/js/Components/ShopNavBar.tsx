import { Head, Link } from "@inertiajs/react";
import { FC } from "react";
import { cn } from "@/lib/utils";

const ShopNavbar = () => {
    const data = [
        {
            id: 2,
            name: "Demo0",
            href: "demo0",
            label: "go",
        },
        {
            id: 3,
            name: "Demo1",
            href: "demo1",
            label: "go",
        },
        {
            id: 4,
            name: "PayTable",
            href: "paytable",
            label: "PayTable",
        },
    ];

    const routes = data.map((route) => ({
        href: `/${route.href}`,
        label: route.name,
        active: false,
    }));

    return (
        <div className="border-b">
            <div>
                <div className="relative px-4 sm:px-6 lg:px-8 flex h-16 items-center">
                    <Link href="/" className="ml-4 flex lg:ml-0 gap-x-2">
                        <p className="font-bold text-xl">STORE</p>
                    </Link>
                    <nav className="mx-6 flex items-center space-x-4 lg:space-x-6">
                        {routes.map((route) => (
                            <Link
                                key={route.href}
                                href={route.href}
                                className={cn(
                                    "text-sm font-medium transition-colors hover:text-black",
                                    route.active
                                        ? "text-black"
                                        : "text-neutral-500"
                                )}
                            >
                                {route.label}
                            </Link>
                        ))}
                    </nav>
                </div>
            </div>
        </div>
    );
};

export default ShopNavbar;
