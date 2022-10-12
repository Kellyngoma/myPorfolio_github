/*const defaultTheme =('tailwindcss/defaultTheme')*/

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./demarche/*.html','./src/*.css'],
 //
  
  theme: { 
    extend: {
      /* my code */
      colors: {
        'bookmark-purple':'#5267DF',
        'bookmark-red' :'#FA5959',
        'bookmark-blue' :'#242A45',
        'bookmark-grey' :'#9192A2',
        'bookmark-white' :'#F7F7F7',
        blue: {
          /*...defaultTheme.colors.blue, c'est fait quand y a pas j'ajout de tailwind */
          950 : '#173050',
        },
        
      },
      isolation:["hover"],
    },
    
    /* my code*/
    fontFamily:{
      Poppins:['Poppins, sans-serif'],

    },
    container:{
      center: true,
      padding: '1rem',
      screens :{
        lg: "1124px",
        xl: "1124px",
        "2xl":  "1124px",
      },
      
    },
    animation:{
      bounce: 'bounce 0.3s infinite' ,
      weggle: 'weggle 1s infinite',
    },
    keyframes:{
      weggle:{
        '0%, 100%':{
          transform: 'scale(1.2) rotate(7deg)',
        },
        "50%":{
          transform : 'scale(0.8) rotate(-7deg)',
        }
      },

    },
    
  },
  plugins: [],
}
