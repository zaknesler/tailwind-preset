const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            colors: {
                header: '#272f3e',
                brand: { ...defaultTheme.colors.red },
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: theme => ({
                outline: `0 0 0 3px ${theme('colors.brand.500')}60`,
                'inner-md': 'inset 0 2px 3px 0 rgba(0, 0, 0, 0.175)',
            }),
        },
        customForms: theme => ({
            default: {
                'input, textarea, multiselect, select': {
                    borderRadius: theme('borderRadius.lg'),
                    boxShadow: theme('boxShadow.sm'),
                },
                'input, textarea, multiselect, select, checkbox, radio': {
                    '&:focus': {
                        borderColor: theme('colors.brand.400'),
                        boxShadow: theme('boxShadow.outline'),
                        transition: 'box-shadow 100ms ease-in-out',
                    },
                },
                'checkbox, radio': {
                    '&:checked:focus': {
                        borderColor: theme('colors.brand.500'),
                        backgroundColor: theme('colors.brand.500'),
                    },
                },
            },
        }),
    },
    variants: {},
    plugins: [
        require('@tailwindcss/custom-forms'),
    ],
    purge: [
        './app/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.js',
        './resources/**/*.php',
    ],
    experimental: {
        applyComplexClasses: true,
        uniformColorPalette: true,
    },
    future: {
        removeDeprecatedGapUtilities: true,
    },
}
