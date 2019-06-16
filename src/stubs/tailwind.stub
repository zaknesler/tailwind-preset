const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
      colors: {
        brand: { ...defaultTheme.colors.teal }
      },
      boxShadow: theme => ({
        outline: `0 0 0 3px ${theme('colors.brand.500')}60`
      }),
      customForms: theme => ({
        focusBorderColor: theme('colors.brand.400'),
        focusShadow: theme('boxShadow.outline')
      })
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
