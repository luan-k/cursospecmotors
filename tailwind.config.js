module.exports = {
  purge: ["./**/*.html", "./**/*.js", "./**/*.php"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        purple: {
          light: "#f5e8f6",
          dark: "#6639b6",
        },
        orange: {
          light: "#f29163",
          dark: "#f05922",
        },
        gray:{
          light: "#f5f5f5",
          dark: "#4a4552",
        },
        green: {
          primary: "#448044",
        },
        dark: {
          primary: "#181C18",
        },
        light: {
          primary: "#D0E5EC",
        },
        pec: {
          graylight: "#f2f2f2",
          graymid: "#3f3d3e",
          graydark: "#0d0d0d",
          bluedark: "#025273",
          bluelight: "#049dd9",
        },
        primary: "#4B0082",
        secondary: "#983134",
        /*  primary: "#002e65", */
        /* light: {
          primary: "#D0E5EC",
        }, */
        /*  primary: "#002e65", */
      },
      fontFamily: {
        'poppins': ["Poppins", "sans-serif"],
        'playfair': ["Playfair Display", "sans-serif"],
        'montserrat': ["Montserrat", "sans-serif"],
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "2rem",
        lg: "7%",
        xl: "8%",
        "2xl": "10%",
      },
    },
  },
  variants: {
    extend: {
      backgroundColor: ["active"],
    },
  },
  plugins: [],
};
