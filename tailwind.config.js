
module.exports = {
	mode: 'jit',
	purge: {
		content: [
			'./components/home/many_solutions/**/*.php',
			'./components/home/card_users/**/*.php',
			'./components/home/categories/**/*.php',
			'./components/home/NeedSomethingDone/**/*.php',
			'./components/home/**/*.php',
			'./components/find-talents/developers/**/*.php',
			'./components/About-us/register-as-company/**/*.php',
			'./components/find-jobs/jobs-card/**/*.php',
			'./components/pages/**/*.php',
			'./components/**/*.php',
			'./*.php',
			'./**.php',
			'./pages/**.php',
			'./components1/home/assets/**/*.js',
		],
	},
	darkMode: false, //you can set it to media(uses prefers-color-scheme) or class(better for toggling modes via a button)
	theme: {
		screens: {

			'2xl': {'max': '1980px'},
			// => @media (max-width: 1980px) { ... }

			'xl': {'max': '1536px'},
			// => @media (max-width: 1536px) { ... }
	  
			'lg': {'max': '1023px'},
			// => @media (max-width: 1023px) { ... }
	  
			'md': {'max': '767px'},
			// => @media (max-width: 767px) { ... }
	  
			'sm': {'max': '639px'},
			// => @media (max-width: 639px) { ... }
		  },
		extend: {
			colors:{
				'customGreen': '#799F28',
				'bg': '#F0F0F0',	
				'purple':'#c084fc',
			  },
			  
			  fontFamily:{
				'courgette':['Courgette', 'cursive'],
			},
			dropShadow:{
				'2lg':'0 10px 8px rgb(0 0 0 / 0.22)',
			},
			boxShadow: {
				'3xl': ' 7px 7px 12px #c1c1c1',
			  }
		},
	},
	variants: {},
	plugins: [],
}
