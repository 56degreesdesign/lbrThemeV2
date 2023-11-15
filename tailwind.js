module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    corePlugins: {
        container: false
    },
    content: [
        // './*.php',
        "./templates/**/*.php",
        "./sbi/*.php",
        "./build/js/*.js",
        "./header.php",
        "./footer.php",
        "./404.php",
        "./page.php",
        "./single.php",
    ],
    theme: {
        colors: {
            transparent: "transparent",
            black: "#000",
            gray: "#707070",
            white: "#fff",
            beige: {
                DEFAULT: '#EEE3D6',
                light: "#F6EEE5"
            },
            green: '#3C4A38',
            orange: "#CC885D",
            gray : '#707070'
        },
        fontFamily: {
            Oscar: ["FH Oscar", "sans-serif"],
            Reckless: ["Reckless Neue", "sans-serif"],
        },
        extend: {
            fontSize: {
                167: "10.438rem",
                120: "7.5rem",
                90: "5.625rem",
                70 : "4.375rem", 
                51: "3.188rem",
                40: "2.5rem",
                35: "2.188rem",
                30: "1.875rem",
                26: "1.625rem",
                25: "1.563rem",
                24: "1.5rem",
                22: "1.375rem",
                20: "1.25rem",
                17: "1.063rem",
                16: "1rem",
                15:"0.938rem",
                14: "0.875rem",
                13: "0.813rem",
                12: "0.75rem",
                11: "0.688rem",
                10: "0.625rem"
            },
            lineHeight: {
                1.87: "1.875",
                1.6: "1.6",
                1.38: "1.38",
                1.56: "1.5625",
                1.35: "1.35294117647",
                1.33: "1.33333333333",
                1.28: "1.28571428571",
                1.25: "1.25",
                1.2: "1.2",
                1.18: "1.18181818182",
                1.16 : "1.16666666667",
                1.125: "1.125",
                1.17: "1.176",
                1.07: "1.071"
            },
            letterSpacing: {
                20: '.020em',
                10: '.010em'
            }
        }
    },
    plugins: [
        function ({
            addComponents
        }) {
            addComponents({
                '.container': {
                    width: '100%',
                    maxWidth: '1920px',
                    marginLeft: 'auto',
                    marginRight: 'auto',
                    paddingLeft: '1.5625rem',
                    paddingRight: '1.5625rem',
                    '@screen md': {
                        paddingLeft: "2.5rem",
                        paddingRight: "2.5rem",
                    },
                    '@screen xl': {
                        paddingLeft: '3.563rem',
                        paddingRight: '3.563rem',
                    }
                }
            })
        }
    ]
};