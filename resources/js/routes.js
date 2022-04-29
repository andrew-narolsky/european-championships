export const routes = [
    // FRONTEND //

    // Home page
    {
        path: '/',
        name: 'home',
        component: () => import('./components/home')
    },

    // Countries
    {
        path: '/country/:slug',
        name: 'country',
        component: () => import('./components/countries/index')
    },

    // Football Clubs
    {
        path: '/football-club/:slug',
        name: 'football-club',
        component: () => import('./components/football-clubs/index')
    }
];
