const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
      colors: {
        brand: { ...defaultTheme.colors.teal },
      },
      boxShadow: theme => ({
        outline: `0 0 0 3px ${theme('colors.brand.500')}60`,
      }),
    },
    customForms: theme => ({
      default: {
        'input, textarea, multiselect, select': {
          borderRadius: theme('borderRadius.lg'),
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
}
