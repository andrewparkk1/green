module.exports = {
    content: ["dist/*.html"],
    theme: {
        fontWeight: {
            'extra-light': 100,
            thin: 200,
            light: 300,
            normal: 400,
            medium: 500,
            semibold: 600,
            bold: 700,
            'extra-bold': 800,
            black: 900,
        },
        extend: {
            dropShadow: {
                'xl': '2px 4px 0.05rem grey',
                '2xl': '2px 4px 0.1rem grey',
                '3xl': '2px 4px 0.2rem grey',
                '4xl': '2px 4px 0.3rem grey'
            }
        }
    },
    plugins: [],
}