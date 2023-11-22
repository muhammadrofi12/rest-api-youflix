import React, { useState } from "react";

const ThemeSwitch = () => {
    const [selectedTheme, setSelectedTheme] = useState("night");

    const handleThemeChange = () => {
        setSelectedTheme((prevTheme) =>
            prevTheme === "night" ? "day" : "night"
        );
    };

    return (
        <label className="swap swap-rotate">
            {/* this hidden checkbox controls the state */}
            <input type="checkbox" checked={selectedTheme === "day"} />

            {/* sun icon */}
            <svg
                className={`swap-on fill-current w-10 h-10 ${
                    selectedTheme === "night" ? "hidden" : ""
                }`}
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
            >
                {/* sun icon path */}
            </svg>

            {/* moon icon */}
            <svg
                className={`swap-off fill-current w-10 h-10 ${
                    selectedTheme === "day" ? "hidden" : ""
                }`}
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
            >
                {/* moon icon path */}
            </svg>

            {/* Theme label */}
            <span className="text-sm">
                {selectedTheme === "day" ? "Day" : "Night"}
            </span>

            {/* Handle theme change */}
            <input
                type="checkbox"
                checked={selectedTheme === "day"}
                onChange={handleThemeChange}
                className="sr-only"
            />
        </label>
    );
};

export default ThemeSwitch;
