module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        rotate: {
                    '-180': '-180deg',
                    '-90': '-90deg',
                    '-45': '-45deg',
                    '0': '0',
                    '45': '45deg',
                    '90': '90deg',
                    '135': '135deg',
                    '180': '180deg',
                    '270': '270deg',
        },
    },
    plugins: [],
    mode: "jit",
};
