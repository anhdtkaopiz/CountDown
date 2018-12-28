import HappyNewYear from './pages/WelcomePages';
import  Ex from  './components/ExampleComponent';
export const routes = [
    {
        path: '/',
        redirect: '/2019',
        name: 'Home',
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/2019',
        name: 'HappyNewYear',
        component: HappyNewYear,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '*',
        name: 'HomePage',
        component: Ex,
        meta: {
            requiresAuth: true
        }
    },
];