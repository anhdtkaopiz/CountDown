import Welcome from './pages/WelcomePages';
import  Ex from  './components/ExampleComponent';
export const routes = [
    {
        path: '/tuan/abc',
        name: 'HomePage',
        component: Welcome,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/',
        redirect: '/tuan/abc',
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